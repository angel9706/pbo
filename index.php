<?php

require_once('./luaslingkaran.php');

use App\Math\luaslingkaran; //panggil namespace

$Lingkaran = new LuasLingkaran(10);
$Lingkaran->tampil('roda'); //panggil method tampil

LuasLingkaran::testing(); //panggil method static
