<?hh // strict
namespace fiz\baz;

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// Source: example2.proto

newtype XXX_AEnum2_t as int = int;
abstract class AEnum2 {
  const XXX_AEnum2_t Z = 0;
  private static dict<int, string> $XXX_itos = dict[
    0 => 'Z',
  ];
  public static function XXX_ItoS(): dict<int, string> {
    return self::$XXX_itos;
  }
  private static dict<string, int> $XXX_stoi = dict[
    'Z' => 0,
  ];
  public static function XXX_FromMixed(mixed $m): XXX_AEnum2_t {
    if ($m is string) return idx(self::$XXX_stoi, $m, \is_numeric($m) ? ((int) $m) : 0);
    if ($m is int) return $m;
    return 0;
  }
  public static function XXX_FromInt(int $i): XXX_AEnum2_t {
    return $i;
  }
}

class example2 implements \Protobuf\Message {
  public int $zomg;
  private string $XXX_skipped;

  public function __construct() {
    $this->zomg = 0;
    $this->XXX_skipped = '';
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          $this->zomg = $d->readVarint32Signed();
          break;
        default:
          $d->skip($fn, $wt);
      }
    }
    $this->XXX_skipped = $d->skippedRaw();
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    if ($this->zomg !== 0) {
      $e->writeTag(1, 0);
      $e->writeVarint($this->zomg);
    }
    $e->writeRaw($this->XXX_skipped);
  }

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->writeInt32('zomg', 'zomg', $this->zomg, false);
  }

  public function MergeJsonFrom(mixed $m): void {
    if ($m === null) return;
    $d = \Protobuf\Internal\JsonDecoder::readObject($m);
    foreach ($d as $k => $v) {
      switch ($k) {
        case 'zomg':
          $this->zomg = \Protobuf\Internal\JsonDecoder::readInt32Signed($v);
          break;
      }
    }
  }
}

class refexample3 implements \Protobuf\Message {
  public ?\Funky $funky;
  private string $XXX_skipped;

  public function __construct() {
    $this->funky = null;
    $this->XXX_skipped = '';
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          if ($this->funky == null) $this->funky = new \Funky();
          $this->funky->MergeFrom($d->readDecoder());
          break;
        default:
          $d->skip($fn, $wt);
      }
    }
    $this->XXX_skipped = $d->skippedRaw();
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    $msg = $this->funky;
    if ($msg != null) {
      $nested = new \Protobuf\Internal\Encoder();
      $msg->WriteTo($nested);
      $e->writeEncoder($nested, 1);
    }
    $e->writeRaw($this->XXX_skipped);
  }

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->writeMessage('funky', 'funky', $this->funky, false);
  }

  public function MergeJsonFrom(mixed $m): void {
    if ($m === null) return;
    $d = \Protobuf\Internal\JsonDecoder::readObject($m);
    foreach ($d as $k => $v) {
      switch ($k) {
        case 'funky':
          if ($v === null) break;
          if ($this->funky == null) $this->funky = new \Funky();
          $this->funky->MergeJsonFrom($v);
          break;
      }
    }
  }
}


class XXX_FileDescriptor_example2__proto implements \Protobuf\Internal\FileDescriptor {
  const string NAME = 'example2.proto';
  const string RAW =
  'eNri4kutSMwtyEk10isoyi/JF2JPy6zSS0qskoJJGEMklOS4OGBKhYS4WKryc9MlGBUYNV'
  .'iDwGwlbS7uotQ0mCYhGS7WtNK87EqwGm4jNj03EC8IIqjFz8Xm6JpXmmskxMrFGCXAkMQG'
  .'tsQYEAAA///mLCgg';
  public function Name(): string {
    return self::NAME;
  }

  public function FileDescriptorProtoBytes(): string {
    return (string)\gzuncompress(\base64_decode(self::RAW));
  }
}
