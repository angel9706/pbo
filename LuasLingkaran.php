<?php
class LuasLingkaran{
    public const PHI = 3.14;
    public int $Jari;

}
$Lingkaran = new LuasLingkaran();
$Lingkaran->Jari = 12;
$Luas = LuasLingkaran::PHI * $Lingkaran->Jari * $Lingkaran->Jari;
echo "Luas Lingkaran dengan jari-jari $Lingkaran->Jari cm adalah $Luas cm2";
?>