package main

import (
	"encoding/json"
	desc "github.com/golang/protobuf/protoc-gen-go/descriptor"
	"strings"
)

type Names struct {
	parent   *Names
	Children map[string]*Names
}

func newNames(parent *Names) *Names {
	return &Names{
		parent:   parent,
		Children: map[string]*Names{},
	}
}

func (n *Names) get(create bool, parts ...string) *Names {
	if len(parts) < 1 {
		return n
	}
	child := n.Children[parts[0]]
	if child == nil {
		if create {
			child = newNames(n)
			n.Children[parts[0]] = child
		} else {
			return nil
		}
	}
	return child.get(create, parts[1:]...)
}

type Namespace struct {
	parent   *Namespace
	Fqn      string
	Names    *Names
	Children map[string]*Namespace
}

func NewEmptyNamespace() *Namespace {
	return newNamespace(nil, "")
}

func newNamespace(parent *Namespace, myName string) *Namespace {
	fqn := myName + "."
	if parent != nil {
		fqn = parent.Fqn + fqn
	}
	return &Namespace{
		parent:   parent,
		Children: map[string]*Namespace{},
		Names:    newNames(nil),
		Fqn:      fqn,
	}
}

func (n *Namespace) get(create bool, parts []string) *Namespace {
	if len(parts) < 1 {
		return n
	}
	child := n.Children[parts[0]]
	if child == nil {
		if create {
			child = newNamespace(n, parts[0])
			n.Children[parts[0]] = child
		} else {
			return nil
		}
	}
	return child.get(create, parts[1:])
}

func (n *Namespace) Parse(fdp *desc.FileDescriptorProto) {
	childns := n.get(true, strings.Split(*fdp.Package, "."))

	// Top level enums.
	for _, edp := range fdp.EnumType {
		childns.Names.get(true, *edp.Name)
	}

	// Messages, recurse.
	for _, dp := range fdp.MessageType {
		childNames := childns.Names.get(true, *dp.Name)
		childNames.parseDescriptor(dp)
	}
}

func (n *Names) parseDescriptor(dp *desc.DescriptorProto) {
	for _, edp := range dp.EnumType {
		n.get(true, *edp.Name)
	}

	for _, dp := range dp.NestedType {
		childNames := n.get(true, *dp.Name)
		childNames.parseDescriptor(dp)
	}
}

func (n *Namespace) PrettyPrint() string {
	b, _ := json.MarshalIndent(n, "", "  ")
	return string(b)
}

// Given a fully qualified name, split it at the namespace boundary after
// resolving the target using c++ scoping rules.
func (n *Namespace) Find(fqn string) (string, string) {
	if !strings.HasPrefix(fqn, ".") {
		panic("name is not fully qualified: " + fqn)
	}
	ns, name := n.find(fqn, true)
	if ns == "" {
		panic("couldn't resolve name: " + fqn)
	}
	return ns, name
}

func (n *Namespace) find(fqn string, checkParent bool) (string, string) {
	if strings.HasPrefix(fqn, n.Fqn) {
		// This name might be in our namespace
		relative := strings.TrimPrefix(fqn, n.Fqn)
		if name := n.Names.get(false, strings.Split(relative, ".")...); name != nil {
			return n.Fqn, relative
		}
		// It may also be in a decendant namespace.
		for _, childns := range n.Children {
			rns, rname := childns.find(fqn, false)
			if rns != "" {
				return rns, rname
			}
		}

	}
	// Try our ancestor namespace.
	// TODO: this will revist n [us] multiple times! optimize.
	if checkParent && n.parent != nil {
		return n.parent.Find(fqn)
	}
	return "", ""
}