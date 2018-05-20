<?hh // strict
namespace foo\bar;

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// Source: example1.proto

newtype AEnum1_EnumType as int = int;
class AEnum1 {
  const AEnum1_EnumType A = 0;
  const AEnum1_EnumType B = 2;
  private static dict<int, string> $itos = dict[
    0 => 'A',
    2 => 'B',
  ];
  public static function NumbersToNames(): dict<int, string> {
    return self::$itos;
  }
  public static function FromInt(int $i): AEnum1_EnumType {
    return $i;
  }
}

// message example2
class example2 implements \Protobuf\Message {
  // field aint32 = 1
  public int $aint32;

  public function __construct() {
    $this->aint32 = 0;
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          $this->aint32 = $d->readVarInt128();
          break;
        default:
          $d->skipWireType($wt);
      }
    }
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    if ($this->aint32 !== 0) {
      $e->writeTag(1, 0);
      $e->writeVarInt128($this->aint32);
    }
  }
  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->writeNum('aint32', 'aint32', $this->aint32);
  }
}

newtype example1_AEnum2_EnumType as int = int;
class example1_AEnum2 {
  const example1_AEnum2_EnumType C = 0;
  const example1_AEnum2_EnumType D = 10;
  private static dict<int, string> $itos = dict[
    0 => 'C',
    10 => 'D',
  ];
  public static function NumbersToNames(): dict<int, string> {
    return self::$itos;
  }
  public static function FromInt(int $i): example1_AEnum2_EnumType {
    return $i;
  }
}

newtype example1_aoneof_OneofType = int;
class example1_aoneof {
  const example1_aoneof_OneofType NONE = 0;
  const example1_aoneof_OneofType oostring = 60;
  const example1_aoneof_OneofType ooint = 61;
}

// message example2
class example1_example2 implements \Protobuf\Message {
  // field astring = 1
  public string $astring;

  public function __construct() {
    $this->astring = '';
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          $this->astring = $d->readString();
          break;
        default:
          $d->skipWireType($wt);
      }
    }
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    if ($this->astring !== '') {
      $e->writeTag(1, 2);
      $e->writeString($this->astring);
    }
  }
  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->writeString('astring', 'astring', $this->astring);
  }
}

// message AmapEntry
class example1_AmapEntry implements \Protobuf\Message {
  // field key = 1
  public string $key;
  // field value = 2
  public string $value;

  public function __construct() {
    $this->key = '';
    $this->value = '';
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          $this->key = $d->readString();
          break;
        case 2:
          $this->value = $d->readString();
          break;
        default:
          $d->skipWireType($wt);
      }
    }
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    if ($this->key !== '') {
      $e->writeTag(1, 2);
      $e->writeString($this->key);
    }
    if ($this->value !== '') {
      $e->writeTag(2, 2);
      $e->writeString($this->value);
    }
  }
  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->writeString('key', 'key', $this->key);
    $e->writeString('value', 'value', $this->value);
  }
}

// message Amap2Entry
class example1_Amap2Entry implements \Protobuf\Message {
  // field key = 1
  public string $key;
  // field value = 2
  public ?\fiz\baz\example2 $value;

  public function __construct() {
    $this->key = '';
    $this->value = null;
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          $this->key = $d->readString();
          break;
        case 2:
          if ($this->value == null) {
            $this->value = new \fiz\baz\example2();
          }
          $this->value->MergeFrom($d->readDecoder());
          break;
        default:
          $d->skipWireType($wt);
      }
    }
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
  }
  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->writeString('key', 'key', $this->key);
    $e->writeMessage('value', 'value', $this->value);
  }
}

// message example1
class example1 implements \Protobuf\Message {
  // field adouble = 1
  public float $adouble;
  // field afloat = 2
  public float $afloat;
  // field aint32 = 3
  public int $aint32;
  // field aint64 = 4
  public int $aint64;
  // field auint32 = 5
  public int $auint32;
  // field auint64 = 6
  public int $auint64;
  // field asint32 = 7
  public int $asint32;
  // field asint64 = 8
  public int $asint64;
  // field afixed32 = 9
  public int $afixed32;
  // field afixed64 = 10
  public int $afixed64;
  // field asfixed32 = 11
  public int $asfixed32;
  // field asfixed64 = 12
  public int $asfixed64;
  // field abool = 13
  public bool $abool;
  // field astring = 14
  public string $astring;
  // field abytes = 15
  public string $abytes;
  // field aenum1 = 20
  public \foo\bar\AEnum1_EnumType $aenum1;
  // field aenum2 = 21
  public \foo\bar\example1_AEnum2_EnumType $aenum2;
  // field aenum22 = 22
  public \fiz\baz\AEnum2_EnumType $aenum22;
  // field manystring = 30
  public vec<string> $manystring;
  // field manyint64 = 31
  public vec<int> $manyint64;
  // field aexample2 = 40
  public ?\foo\bar\example1_example2 $aexample2;
  // field aexample22 = 41
  public ?\foo\bar\example2 $aexample22;
  // field aexample23 = 42
  public ?\fiz\baz\example2 $aexample23;
  // field amap = 51
  public dict<string, string> $amap;
  // field amap2 = 52
  public dict<string, ?\fiz\baz\example2> $amap2;
  // field outoforder = 49
  public int $outoforder;
  // field oostring = 60
  public string $oostring;
  // field ooint = 61
  public int $ooint;

  public function __construct() {
    $this->adouble = 0.0;
    $this->afloat = 0.0;
    $this->aint32 = 0;
    $this->aint64 = 0;
    $this->auint32 = 0;
    $this->auint64 = 0;
    $this->asint32 = 0;
    $this->asint64 = 0;
    $this->afixed32 = 0;
    $this->afixed64 = 0;
    $this->asfixed32 = 0;
    $this->asfixed64 = 0;
    $this->abool = false;
    $this->astring = '';
    $this->abytes = '';
    $this->aenum1 = \foo\bar\AEnum1::A;
    $this->aenum2 = \foo\bar\example1_AEnum2::C;
    $this->aenum22 = \fiz\baz\AEnum2::Z;
    $this->manystring = vec[];
    $this->manyint64 = vec[];
    $this->aexample2 = null;
    $this->aexample22 = null;
    $this->aexample23 = null;
    $this->amap = dict[];
    $this->amap2 = dict[];
    $this->outoforder = 0;
    $this->oostring = '';
    $this->ooint = 0;
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          $this->adouble = $d->readDouble();
          break;
        case 2:
          $this->afloat = $d->readFloat();
          break;
        case 3:
          $this->aint32 = $d->readVarInt128();
          break;
        case 4:
          $this->aint64 = $d->readVarInt128();
          break;
        case 5:
          $this->auint32 = $d->readVarInt128();
          break;
        case 6:
          $this->auint64 = $d->readVarInt128();
          break;
        case 7:
          $this->asint32 = $d->readVarInt128ZigZag32();
          break;
        case 8:
          $this->asint64 = $d->readVarInt128ZigZag64();
          break;
        case 9:
          $this->afixed32 = $d->readLittleEndianInt32();
          break;
        case 10:
          $this->afixed64 = $d->readLittleEndianInt64();
          break;
        case 11:
          $this->asfixed32 = $d->readLittleEndianInt32();
          break;
        case 12:
          $this->asfixed64 = $d->readLittleEndianInt64();
          break;
        case 13:
          $this->abool = $d->readBool();
          break;
        case 14:
          $this->astring = $d->readString();
          break;
        case 15:
          $this->abytes = $d->readString();
          break;
        case 20:
          $this->aenum1 = \foo\bar\AEnum1::FromInt($d->readVarInt128());
          break;
        case 21:
          $this->aenum2 = \foo\bar\example1_AEnum2::FromInt($d->readVarInt128());
          break;
        case 22:
          $this->aenum22 = \fiz\baz\AEnum2::FromInt($d->readVarInt128());
          break;
        case 30:
          $this->manystring []= $d->readString();
          break;
        case 31:
          if ($wt == 2) {
            $packed = $d->readDecoder();
            while (!$packed->isEOF()) {
              $this->manyint64 []= $packed->readVarInt128();
            }
          } else {
            $this->manyint64 []= $d->readVarInt128();
          }
          break;
        case 40:
          if ($this->aexample2 == null) {
            $this->aexample2 = new \foo\bar\example1_example2();
          }
          $this->aexample2->MergeFrom($d->readDecoder());
          break;
        case 41:
          if ($this->aexample22 == null) {
            $this->aexample22 = new \foo\bar\example2();
          }
          $this->aexample22->MergeFrom($d->readDecoder());
          break;
        case 42:
          if ($this->aexample23 == null) {
            $this->aexample23 = new \fiz\baz\example2();
          }
          $this->aexample23->MergeFrom($d->readDecoder());
          break;
        case 49:
          $this->outoforder = $d->readVarInt128();
          break;
        case 51:
          $obj = new \foo\bar\example1_AmapEntry();
          $obj->MergeFrom($d->readDecoder());
          $this->amap[$obj->key] = $obj->value;
          break;
        case 52:
          $obj = new \foo\bar\example1_Amap2Entry();
          $obj->MergeFrom($d->readDecoder());
          $this->amap2[$obj->key] = $obj->value;
          break;
        case 60:
          $this->oostring = $d->readString();
          break;
        case 61:
          $this->ooint = $d->readVarInt128();
          break;
        default:
          $d->skipWireType($wt);
      }
    }
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    if ($this->adouble !== 0.0) {
      $e->writeTag(1, 1);
      $e->writeDouble($this->adouble);
    }
    if ($this->afloat !== 0.0) {
      $e->writeTag(2, 5);
      $e->writeFloat($this->afloat);
    }
    if ($this->aint32 !== 0) {
      $e->writeTag(3, 0);
      $e->writeVarInt128($this->aint32);
    }
    if ($this->aint64 !== 0) {
      $e->writeTag(4, 0);
      $e->writeVarInt128($this->aint64);
    }
    if ($this->auint32 !== 0) {
      $e->writeTag(5, 0);
      $e->writeVarInt128($this->auint32);
    }
    if ($this->auint64 !== 0) {
      $e->writeTag(6, 0);
      $e->writeVarInt128($this->auint64);
    }
    if ($this->asint32 !== 0) {
      $e->writeTag(7, 0);
      $e->writeVarInt128ZigZag32($this->asint32);
    }
    if ($this->asint64 !== 0) {
      $e->writeTag(8, 0);
      $e->writeVarInt128ZigZag64($this->asint64);
    }
    if ($this->afixed32 !== 0) {
      $e->writeTag(9, 5);
      $e->writeLittleEndianInt32($this->afixed32);
    }
    if ($this->afixed64 !== 0) {
      $e->writeTag(10, 1);
      $e->writeLittleEndianInt64($this->afixed64);
    }
    if ($this->asfixed32 !== 0) {
      $e->writeTag(11, 5);
      $e->writeLittleEndianInt32($this->asfixed32);
    }
    if ($this->asfixed64 !== 0) {
      $e->writeTag(12, 1);
      $e->writeLittleEndianInt64($this->asfixed64);
    }
    if ($this->abool !== false) {
      $e->writeTag(13, 0);
      $e->writeBool($this->abool);
    }
    if ($this->astring !== '') {
      $e->writeTag(14, 2);
      $e->writeString($this->astring);
    }
    if ($this->abytes !== '') {
      $e->writeTag(15, 2);
      $e->writeString($this->abytes);
    }
    if ($this->aenum1 !== \foo\bar\AEnum1::A) {
      $e->writeTag(20, 0);
      $e->writeVarInt128($this->aenum1);
    }
    if ($this->aenum2 !== \foo\bar\example1_AEnum2::C) {
      $e->writeTag(21, 0);
      $e->writeVarInt128($this->aenum2);
    }
    if ($this->aenum22 !== \fiz\baz\AEnum2::Z) {
      $e->writeTag(22, 0);
      $e->writeVarInt128($this->aenum22);
    }
    foreach ($this->manystring as $elem) {
      $e->writeTag(30, 2);
      $e->writeString($elem);
    }
    $packed = new \Protobuf\Internal\Encoder();
    foreach ($this->manyint64 as $elem) {
      $packed->writeVarInt128($elem);
    }
    $e->writeEncoder($packed, 31);
    $msg = $this->aexample2;
    if ($msg != null) {
      $nested = new \Protobuf\Internal\Encoder();
      $msg->WriteTo($nested);
      $e->writeEncoder($nested, 40);
    }
    $msg = $this->aexample22;
    if ($msg != null) {
      $nested = new \Protobuf\Internal\Encoder();
      $msg->WriteTo($nested);
      $e->writeEncoder($nested, 41);
    }
    $msg = $this->aexample23;
    if ($msg != null) {
      $nested = new \Protobuf\Internal\Encoder();
      $msg->WriteTo($nested);
      $e->writeEncoder($nested, 42);
    }
    if ($this->outoforder !== 0) {
      $e->writeTag(49, 0);
      $e->writeVarInt128($this->outoforder);
    }
    foreach ($this->amap as $k => $v) {
      $obj = new \foo\bar\example1_AmapEntry();
      $obj->key = $k;
      $obj->value = $v;
      $nested = new \Protobuf\Internal\Encoder();
      $obj->WriteTo($nested);
      $e->writeEncoder($nested, 51);
    }
    foreach ($this->amap2 as $k => $v) {
      $obj = new \foo\bar\example1_Amap2Entry();
      $obj->key = $k;
      $obj->value = $v;
      $nested = new \Protobuf\Internal\Encoder();
      $obj->WriteTo($nested);
      $e->writeEncoder($nested, 52);
    }
    if ($this->oostring !== '') {
      $e->writeTag(60, 2);
      $e->writeString($this->oostring);
    }
    if ($this->ooint !== 0) {
      $e->writeTag(61, 0);
      $e->writeVarInt128($this->ooint);
    }
  }
  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->writeNum('adouble', 'adouble', $this->adouble);
    $e->writeNum('afloat', 'afloat', $this->afloat);
    $e->writeNum('aint32', 'aint32', $this->aint32);
    $e->writeNum('aint64', 'aint64', $this->aint64);
    $e->writeNum('auint32', 'auint32', $this->auint32);
    $e->writeNum('auint64', 'auint64', $this->auint64);
    $e->writeNum('asint32', 'asint32', $this->asint32);
    $e->writeNum('asint64', 'asint64', $this->asint64);
    $e->writeNum('afixed32', 'afixed32', $this->afixed32);
    $e->writeNum('afixed64', 'afixed64', $this->afixed64);
    $e->writeNum('asfixed32', 'asfixed32', $this->asfixed32);
    $e->writeNum('asfixed64', 'asfixed64', $this->asfixed64);
    $e->writeBool('abool', 'abool', $this->abool);
    $e->writeString('astring', 'astring', $this->astring);
    $e->writeString('abytes', 'abytes', $this->abytes);
    $e->writeEnum('aenum1', 'aenum1', \foo\bar\AEnum1::NumbersToNames(), $this->aenum1);
    $e->writeEnum('aenum2', 'aenum2', \foo\bar\example1_AEnum2::NumbersToNames(), $this->aenum2);
    $e->writeEnum('aenum22', 'aenum22', \fiz\baz\AEnum2::NumbersToNames(), $this->aenum22);
    $e->writePrimitiveList('manystring', 'manystring', $this->manystring);
    $e->writePrimitiveList('manyint64', 'manyint64', $this->manyint64);
    $e->writeMessage('aexample2', 'aexample2', $this->aexample2);
    $e->writeMessage('aexample22', 'aexample22', $this->aexample22);
    $e->writeMessage('aexample23', 'aexample23', $this->aexample23);
    $e->writeNum('outoforder', 'outoforder', $this->outoforder);
    $e->writeString('oostring', 'oostring', $this->oostring);
    $e->writeNum('ooint', 'ooint', $this->ooint);
  }

  public function oneof_aoneof(): example1_aoneof_OneofType {
    if ($this->oostring != '') {
      return example1_aoneof::oostring;
    }
    if ($this->ooint != 0) {
      return example1_aoneof::ooint;
    }
    return example1_aoneof::NONE;
  }
}

class ExampleServiceClient {
  public function __construct(private \Grpc\ClientConn $cc) {
  }

  public async function OneToTwo(\Grpc\Context $ctx, \foo\bar\example1 $in, \Grpc\CallOption ...$co): Awaitable<\foo\bar\example2> {
    $out = new \foo\bar\example2();
    await $this->cc->Invoke($ctx, '/foo.bar.ExampleService/OneToTwo', $in, $out, ...$co);
    return $out;
  }
}

interface ExampleServiceServer {
  public function OneToTwo(\Grpc\Context $ctx, \foo\bar\example1 $in): \foo\bar\example2;
}

function RegisterExampleServiceServer(\Grpc\Server $server, ExampleServiceServer $service): void {
  $methods = vec[];
  $handler = function(\Grpc\Context $ctx, \Grpc\DecoderFunc $df): \Protobuf\Message use ($service) {
    $in = new \foo\bar\example1();
    $df($in);
    return $service->OneToTwo($ctx, $in);
  };
  $methods []= new \Grpc\MethodDesc('OneToTwo', $handler);
  $server->RegisterService(new \Grpc\ServiceDesc('foo.bar.ExampleService', $methods));
}

class __FileDescriptor_example1__proto implements \Protobuf\Internal\FileDescriptor {
  const string NAME = 'example1.proto';
  const string RAW = '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';
  public function Name(): string {
    return __FileDescriptor_example1__proto::NAME;
  }

  public function FileDescriptorProtoBytes(): string {
    return (string)gzuncompress(base64_decode(__FileDescriptor_example1__proto::RAW));
  }
}
