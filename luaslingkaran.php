<?php
class LuasLingkaran{
    public const PHI = 3.14;
    public int $Jari;

    public function __construct($isiJari = 1) {
        $this->Jari = $isiJari;
    }

    public function tampil($nama = 'ban') {
        $Luas = LuasLingkaran::PHI * $this->Jari * $this->Jari;
        echo "Luas Lingkaran dengan jari-jari $nama cm adalah $Luas cm2";
    }

    public static function testing(){
        echo"<br>";
        echo"ini testing static";
    }

    public function __destruct() {
        echo "<br>saya lelah";
    }
}
$Lingkaran = new LuasLingkaran(10);
$Lingkaran->tampil('roda'); //panggil method tampil

LuasLingkaran::testing(); //panggil method static

