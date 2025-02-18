<?hh // strict
namespace google\protobuf;

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// Source: struct.proto

newtype NullValue_enum_t as int = int;
abstract class NullValue {
  const NullValue_enum_t NULL_VALUE = 0;
  private static dict<int, string> $itos = dict[
    0 => 'NULL_VALUE',
  ];
  public static function ToStringDict(): dict<int, string> {
    return self::$itos;
  }
  private static dict<string, int> $stoi = dict[
    'NULL_VALUE' => 0,
  ];
  public static function FromMixed(mixed $m): NullValue_enum_t {
    if ($m is string) return idx(self::$stoi, $m, \is_numeric($m) ? ((int) $m) : 0);
    if ($m is int) return $m;
    return 0;
  }
  public static function FromInt(int $i): NullValue_enum_t {
    return $i;
  }
}

class Struct_FieldsEntry implements \Protobuf\Message {
  public string $key;
  public ?\google\protobuf\Value $value;
  private string $XXX_unrecognized;

  public function __construct(shape(
    ?'key' => string,
    ?'value' => ?\google\protobuf\Value,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? null;
    $this->XXX_unrecognized = '';
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          $this->key = $d->readString();
          break;
        case 2:
          if ($this->value == null) $this->value = new \google\protobuf\Value();
          $this->value->MergeFrom($d->readDecoder());
          break;
        default:
          $d->skip($fn, $wt);
      }
    }
    $this->XXX_unrecognized = $d->skippedRaw();
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    if ($this->key !== '') {
      $e->writeTag(1, 2);
      $e->writeString($this->key);
    }
    $msg = $this->value;
    if ($msg != null) {
      $nested = new \Protobuf\Internal\Encoder();
      $msg->WriteTo($nested);
      $e->writeEncoder($nested, 2);
    }
    $e->writeRaw($this->XXX_unrecognized);
  }

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->writeString('key', 'key', $this->key, false);
    $e->writeMessage('value', 'value', $this->value, false);
  }

  public function MergeJsonFrom(mixed $m): void {
    if ($m === null) return;
    $d = \Protobuf\Internal\JsonDecoder::readObject($m);
    foreach ($d as $k => $v) {
      switch ($k) {
        case 'key':
          $this->key = \Protobuf\Internal\JsonDecoder::readString($v);
          break;
        case 'value':
          if ($this->value == null) $this->value = new \google\protobuf\Value();
          $this->value->MergeJsonFrom($v);
          break;
      }
    }
  }

  public function CopyFrom(\Protobuf\Message $o): void {
    if (!($o is Struct_FieldsEntry)) {
      throw new \Protobuf\ProtobufException('CopyFrom failed: incorrect type received');
    }
    $this->key = $o->key;
    $tmp = $o->value;
    if ($tmp !== null) {
      $nv = new \google\protobuf\Value();
      $nv->CopyFrom($tmp);
      $this->value = $nv;
    }
    $this->XXX_unrecognized = $o->XXX_unrecognized;
  }
}

class Struct implements \Protobuf\Message {
  public dict<string, \google\protobuf\Value> $fields;
  private string $XXX_unrecognized;

  public function __construct(shape(
    ?'fields' => dict<string, \google\protobuf\Value>,
  ) $s = shape()) {
    $this->fields = $s['fields'] ?? dict[];
    $this->XXX_unrecognized = '';
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          $obj = new \google\protobuf\Struct_FieldsEntry();
          $obj->MergeFrom($d->readDecoder());
          $this->fields[$obj->key] = $obj->value ?? new \google\protobuf\Value();
          break;
        default:
          $d->skip($fn, $wt);
      }
    }
    $this->XXX_unrecognized = $d->skippedRaw();
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    foreach ($this->fields as $k => $v) {
      $obj = new \google\protobuf\Struct_FieldsEntry();
      $obj->key = $k;
      $obj->value = $v;
      $nested = new \Protobuf\Internal\Encoder();
      $obj->WriteTo($nested);
      $e->writeEncoder($nested, 1);
    }
    $e->writeRaw($this->XXX_unrecognized);
  }

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $dict = dict[];
    foreach ($this->fields as $kk => $vv) {
      $dict[$kk]= $e->encodeMessage($vv);
    }
    $e->setCustomEncoding($dict);
  }

  public function MergeJsonFrom(mixed $m): void {
    if ($m is dict<_,_>) {
      foreach ($m as $k => $vv) {
        $val = new \google\protobuf\Value();
        $val->MergeJsonFrom($vv);
        $this->fields[(string)$k] = $val;
      }
    }
  }

  public function CopyFrom(\Protobuf\Message $o): void {
    if (!($o is Struct)) {
      throw new \Protobuf\ProtobufException('CopyFrom failed: incorrect type received');
    }
    foreach ($o->fields as $k => $v) {
      $nv = new \google\protobuf\Value();
      $nv->CopyFrom($v);
      $this->fields[$k] = $nv;
    }
    $this->XXX_unrecognized = $o->XXX_unrecognized;
  }
}

enum Value_kind_oneof_t: int {
  NOT_SET = 0;
  null_value = 1;
  number_value = 2;
  string_value = 3;
  bool_value = 4;
  struct_value = 5;
  list_value = 6;
}

interface Value_kind {
  public function WhichOneof(): Value_kind_oneof_t;
  public function WriteTo(\Protobuf\Internal\Encoder $e): void;
  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void;
  public function Copy(): Value_kind;
}

class Value_kind_NOT_SET implements Value_kind {
  public function WhichOneof(): Value_kind_oneof_t {
    return Value_kind_oneof_t::NOT_SET;
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {}

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {}

  public function Copy(): Value_kind { return $this; }
}

class Value_null_value implements Value_kind {
  public function __construct(public \google\protobuf\NullValue_enum_t $null_value) {}

  public function WhichOneof(): Value_kind_oneof_t {
    return Value_kind_oneof_t::null_value;
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    $e->writeTag(1, 0);;
    $e->writeVarint($this->null_value);
  }

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->writeEnum('null_value', 'nullValue', \google\protobuf\NullValue::ToStringDict(), $this->null_value, true);
  }

  public function Copy(): Value_kind {
    return new Value_null_value($this->null_value);
  }
}

class Value_number_value implements Value_kind {
  public function __construct(public float $number_value) {}

  public function WhichOneof(): Value_kind_oneof_t {
    return Value_kind_oneof_t::number_value;
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    $e->writeTag(2, 1);;
    $e->writeDouble($this->number_value);
  }

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->writeFloat('number_value', 'numberValue', $this->number_value, true);
  }

  public function Copy(): Value_kind {
    return new Value_number_value($this->number_value);
  }
}

class Value_string_value implements Value_kind {
  public function __construct(public string $string_value) {}

  public function WhichOneof(): Value_kind_oneof_t {
    return Value_kind_oneof_t::string_value;
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    $e->writeTag(3, 2);;
    $e->writeString($this->string_value);
  }

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->writeString('string_value', 'stringValue', $this->string_value, true);
  }

  public function Copy(): Value_kind {
    return new Value_string_value($this->string_value);
  }
}

class Value_bool_value implements Value_kind {
  public function __construct(public bool $bool_value) {}

  public function WhichOneof(): Value_kind_oneof_t {
    return Value_kind_oneof_t::bool_value;
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    $e->writeTag(4, 0);;
    $e->writeBool($this->bool_value);
  }

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->writeBool('bool_value', 'boolValue', $this->bool_value, true);
  }

  public function Copy(): Value_kind {
    return new Value_bool_value($this->bool_value);
  }
}

class Value_struct_value implements Value_kind {
  public function __construct(public \google\protobuf\Struct $struct_value) {}

  public function WhichOneof(): Value_kind_oneof_t {
    return Value_kind_oneof_t::struct_value;
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    $nested = new \Protobuf\Internal\Encoder();
    $this->struct_value->WriteTo($nested);
    $e->writeEncoder($nested, 5);
  }

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->writeMessage('struct_value', 'structValue', $this->struct_value, true);
  }

  public function Copy(): Value_kind {
    $nv = new \google\protobuf\Struct();
    $nv->CopyFrom($this->struct_value);
    return new Value_struct_value($nv);
  }
}

class Value_list_value implements Value_kind {
  public function __construct(public \google\protobuf\ListValue $list_value) {}

  public function WhichOneof(): Value_kind_oneof_t {
    return Value_kind_oneof_t::list_value;
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    $nested = new \Protobuf\Internal\Encoder();
    $this->list_value->WriteTo($nested);
    $e->writeEncoder($nested, 6);
  }

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->writeMessage('list_value', 'listValue', $this->list_value, true);
  }

  public function Copy(): Value_kind {
    $nv = new \google\protobuf\ListValue();
    $nv->CopyFrom($this->list_value);
    return new Value_list_value($nv);
  }
}

class Value implements \Protobuf\Message {
  public Value_kind $kind;
  private string $XXX_unrecognized;

  public function __construct(shape(
    ?'kind' => Value_kind,
  ) $s = shape()) {
    $this->kind = $s['kind'] ?? new Value_kind_NOT_SET();
    $this->XXX_unrecognized = '';
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          $this->kind = new Value_null_value(\google\protobuf\NullValue::FromInt($d->readVarint()));
          break;
        case 2:
          $this->kind = new Value_number_value($d->readDouble());
          break;
        case 3:
          $this->kind = new Value_string_value($d->readString());
          break;
        case 4:
          $this->kind = new Value_bool_value($d->readBool());
          break;
        case 5:
          $obj = new \google\protobuf\Struct();
          $obj->MergeFrom($d->readDecoder());
          $this->kind = new Value_struct_value($obj);
          break;
        case 6:
          $obj = new \google\protobuf\ListValue();
          $obj->MergeFrom($d->readDecoder());
          $this->kind = new Value_list_value($obj);
          break;
        default:
          $d->skip($fn, $wt);
      }
    }
    $this->XXX_unrecognized = $d->skippedRaw();
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    $this->kind->WriteTo($e);
    $e->writeRaw($this->XXX_unrecognized);
  }

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    if ($this->kind is \google\protobuf\Value_null_value) {
      $e->setCustomEncoding(null);
      return;
    }
    if ($this->kind is \google\protobuf\Value_number_value) {
      $e->setCustomEncoding($this->kind->number_value);
      return;
    }
    if ($this->kind is \google\protobuf\Value_string_value) {
      $e->setCustomEncoding($this->kind->string_value);
      return;
    }
    if ($this->kind is \google\protobuf\Value_bool_value) {
      $e->setCustomEncoding($this->kind->bool_value);
      return;
    }
    if ($this->kind is \google\protobuf\Value_list_value) {
      $e->setCustomEncoding($e->encodeMessage($this->kind->list_value));
      return;
    }
    if ($this->kind is \google\protobuf\Value_struct_value) {
      $e->setCustomEncoding($e->encodeMessage($this->kind->struct_value));
      return;
    }
  }

  public function MergeJsonFrom(mixed $m): void {
    if ($m === null) {
      $this->kind = new \google\protobuf\Value_null_value(\google\protobuf\NullValue::NULL_VALUE);
    } else if ($m is string) {
      $this->kind = new \google\protobuf\Value_string_value($m);
    } else if ($m is bool) {
      $this->kind = new \google\protobuf\Value_bool_value($m);
    } else if (\is_numeric($m)) {
      $this->kind = new \google\protobuf\Value_number_value((float)$m);
    } else if ($m is vec<_>) {
      $lv = new \google\protobuf\ListValue();
      $lv->MergeJsonFrom($m);
      $this->kind = new \google\protobuf\Value_list_value($lv);
    } else if ($m is dict<_,_>) {
      $struct = new \google\protobuf\Struct();
      $struct->MergeJsonFrom($m);
      $this->kind = new \google\protobuf\Value_struct_value($struct);
    }
  }

  public function CopyFrom(\Protobuf\Message $o): void {
    if (!($o is Value)) {
      throw new \Protobuf\ProtobufException('CopyFrom failed: incorrect type received');
    }
    $this->kind = $o->kind->Copy();
    $this->XXX_unrecognized = $o->XXX_unrecognized;
  }
}

class ListValue implements \Protobuf\Message {
  public vec<\google\protobuf\Value> $values;
  private string $XXX_unrecognized;

  public function __construct(shape(
    ?'values' => vec<\google\protobuf\Value>,
  ) $s = shape()) {
    $this->values = $s['values'] ?? vec[];
    $this->XXX_unrecognized = '';
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          $obj = new \google\protobuf\Value();
          $obj->MergeFrom($d->readDecoder());
          $this->values []= $obj;
          break;
        default:
          $d->skip($fn, $wt);
      }
    }
    $this->XXX_unrecognized = $d->skippedRaw();
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    foreach ($this->values as $msg) {
      $nested = new \Protobuf\Internal\Encoder();
      $msg->WriteTo($nested);
      $e->writeEncoder($nested, 1);
    }
    $e->writeRaw($this->XXX_unrecognized);
  }

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $vec = vec[];
    foreach ($this->values as $lv) {
      $vec []= $e->encodeMessage($lv);
    }
    $e->setCustomEncoding($vec);
  }

  public function MergeJsonFrom(mixed $m): void {
    if ($m is vec<_>) {
      foreach ($m as $vv) {
        $val = new \google\protobuf\Value();
        $val->MergeJsonFrom($vv);
        $this->values []= $val;
      }
    }
  }

  public function CopyFrom(\Protobuf\Message $o): void {
    if (!($o is ListValue)) {
      throw new \Protobuf\ProtobufException('CopyFrom failed: incorrect type received');
    }
    foreach ($o->values as $v) {
      $nv = new \google\protobuf\Value();
      $nv->CopyFrom($v);
      $this->values []= $nv;
    }
    $this->XXX_unrecognized = $o->XXX_unrecognized;
  }
}


class XXX_FileDescriptor_struct__proto implements \Protobuf\Internal\FileDescriptor {
  const string NAME = 'struct.proto';
  const string RAW =
  'eNp0kcFr1EAUxneSbjAvpZYRdKmgYXsJIgmuFzFeDNQWDCVGW8HL0qRpDJ2dCcmMskf/C8'
  .'8ePfrXeZSZycSyy56S9+X3vve+F9jveSdKHrYd4wzfrxmrSaWrQtzMfyJwPioCx+DcNBW5'
  .'7mfItwNvcRxuwKEGw3eKOqG8W+dDy9EH8O7I+BDs22o9Qz4K3Fy+4ucw/XZFRDWzfBR4i4'
  .'db5pfya66h19YrNP9jwVSJOAaggpClNpCmB4ujLYNzQYjizya5S02Bj2GfilVRdcv/89HZ'
  .'JPe0OkI97xpaD5AtF5eQVjX0FKBgzKyx56PgnhwlNQ28MdcekKmK+mjHHQd7UfIxJWl60+'
  .'uo3u2UadPzMSUxReLA3m1Dr+cxuCOBQ3CUmfmju44+UM8egzseER8AnF+k6fLybXpxcjhJ'
  .'fiB4ULLVpkXi6TSZrDP05UXd8K+iCEu2impGrmgdGTRq+bqt+kiHjvWjLf4i9MuyT7Pkt/'
  .'XkVJtnZr/PFSHvKftOP8nOwlFWL/8FAAD//zx151M';
  public function Name(): string {
    return self::NAME;
  }

  public function FileDescriptorProtoBytes(): string {
    return (string)\gzuncompress(\base64_decode(self::RAW));
  }
}
