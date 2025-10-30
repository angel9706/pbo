<?php
class LuasLingkaran{
    public const PHI = 3.14;
    public int $Jari;

    public function tampil($nama = 'ban') {
        $Luas = LuasLingkaran::PHI * $this->Jari * $this->Jari;
        echo "Luas Lingkaran dengan jari-jari $nama cm adalah $Luas cm2";
    }

    public static function testing(){
        echo"<br>";
        echo"ini testing static";
    }
}
$Lingkaran = new LuasLingkaran();
$Lingkaran->Jari = 12;
$Lingkaran->tampil('roda'); //panggil method tampil

LuasLingkaran::testing(); //panggil method static