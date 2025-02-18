<?hh // strict
namespace google\protobuf;

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// Source: timestamp.proto

class Timestamp implements \Protobuf\Message {
  public int $seconds;
  public int $nanos;
  private string $XXX_unrecognized;

  public function __construct(shape(
    ?'seconds' => int,
    ?'nanos' => int,
  ) $s = shape()) {
    $this->seconds = $s['seconds'] ?? 0;
    $this->nanos = $s['nanos'] ?? 0;
    $this->XXX_unrecognized = '';
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          $this->seconds = $d->readVarint();
          break;
        case 2:
          $this->nanos = $d->readVarint32Signed();
          break;
        default:
          $d->skip($fn, $wt);
      }
    }
    $this->XXX_unrecognized = $d->skippedRaw();
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    if ($this->seconds !== 0) {
      $e->writeTag(1, 0);
      $e->writeVarint($this->seconds);
    }
    if ($this->nanos !== 0) {
      $e->writeTag(2, 0);
      $e->writeVarint($this->nanos);
    }
    $e->writeRaw($this->XXX_unrecognized);
  }

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->writeInt64Signed('seconds', 'seconds', $this->seconds, false);
    $e->writeInt32('nanos', 'nanos', $this->nanos, false);
  }

  public function MergeJsonFrom(mixed $m): void {
    if ($m === null) return;
    $d = \Protobuf\Internal\JsonDecoder::readObject($m);
    foreach ($d as $k => $v) {
      switch ($k) {
        case 'seconds':
          $this->seconds = \Protobuf\Internal\JsonDecoder::readInt64Signed($v);
          break;
        case 'nanos':
          $this->nanos = \Protobuf\Internal\JsonDecoder::readInt32Signed($v);
          break;
      }
    }
  }

  public function CopyFrom(\Protobuf\Message $o): void {
    if (!($o is Timestamp)) {
      throw new \Protobuf\ProtobufException('CopyFrom failed: incorrect type received');
    }
    $this->seconds = $o->seconds;
    $this->nanos = $o->nanos;
    $this->XXX_unrecognized = $o->XXX_unrecognized;
  }
}


class XXX_FileDescriptor_timestamp__proto implements \Protobuf\Internal\FileDescriptor {
  const string NAME = 'timestamp.proto';
  const string RAW =
  'eNri4i/JzE0tLknMLdArKMovyRfiT8/PT89JhfCSStOUrLk4Q2BqhCS42ItTk/PzUoolGB'
  .'UYNZiDYFwhES7WvMS8/GIJJgVGDdYgCMepjks4OT9XD81MJz64iQEgoQDGKO30zJKM0iS9'
  .'5Pxc/fT8nMS8dH2Yav2CksqC1GJ9uEt/MDIuYmJ2D3BaxSTnDjE5AKpWLzw1J8c7L788Lw'
  .'SkJ4kNbIgxIAAA//9jqE7v';
  public function Name(): string {
    return self::NAME;
  }

  public function FileDescriptorProtoBytes(): string {
    return (string)\gzuncompress(\base64_decode(self::RAW));
  }
}
