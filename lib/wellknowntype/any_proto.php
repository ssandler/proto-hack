<?hh // strict
namespace google\protobuf;

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// Source: any.proto

class Any implements \Protobuf\Message {
  public string $type_url;
  public string $value;
  private string $XXX_unrecognized;

  public function __construct(shape(
    ?'type_url' => string,
    ?'value' => string,
  ) $s = shape()) {
    $this->type_url = $s['type_url'] ?? '';
    $this->value = $s['value'] ?? '';
    $this->XXX_unrecognized = '';
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          $this->type_url = $d->readString();
          break;
        case 2:
          $this->value = $d->readString();
          break;
        default:
          $d->skip($fn, $wt);
      }
    }
    $this->XXX_unrecognized = $d->skippedRaw();
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    if ($this->type_url !== '') {
      $e->writeTag(1, 2);
      $e->writeString($this->type_url);
    }
    if ($this->value !== '') {
      $e->writeTag(2, 2);
      $e->writeString($this->value);
    }
    $e->writeRaw($this->XXX_unrecognized);
  }

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->writeString('type_url', 'typeUrl', $this->type_url, false);
    $e->writeBytes('value', 'value', $this->value, false);
  }

  public function MergeJsonFrom(mixed $m): void {
    if ($m === null) return;
    $d = \Protobuf\Internal\JsonDecoder::readObject($m);
    foreach ($d as $k => $v) {
      switch ($k) {
        case 'type_url': case 'typeUrl':
          $this->type_url = \Protobuf\Internal\JsonDecoder::readString($v);
          break;
        case 'value':
          $this->value = \Protobuf\Internal\JsonDecoder::readBytes($v);
          break;
      }
    }
  }

  public function CopyFrom(\Protobuf\Message $o): void {
    if (!($o is Any)) {
      throw new \Protobuf\ProtobufException('CopyFrom failed: incorrect type received');
    }
    $this->type_url = $o->type_url;
    $this->value = $o->value;
    $this->XXX_unrecognized = $o->XXX_unrecognized;
  }
}


class XXX_FileDescriptor_any__proto implements \Protobuf\Internal\FileDescriptor {
  const string NAME = 'any.proto';
  const string RAW =
  'eNri4kzMq9QrKMovyRfiT8/PT89JhfCSStOUzLiYHfMqhSS5OEoqC1LjS4tyJBgVGDU4g9'
  .'hB/NCiHCERLtayxJzSVAkmBUYNniAIxymfSzg5P1cPzTgnDse8ygAQJ4AxSjU9sySjNEkv'
  .'OT9XPz0/JzEvXR+mTr8AZHqxfmJe5SImZvcAp1VMcu4QowKgSvTCU3NyvPPyy/NCQEqT2M'
  .'B6jQEBAAD///mrRC8';
  public function Name(): string {
    return self::NAME;
  }

  public function FileDescriptorProtoBytes(): string {
    return (string)\gzuncompress(\base64_decode(self::RAW));
  }
}
