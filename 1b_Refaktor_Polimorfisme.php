<?php

interface BalokInterface
{
    public function hitungBalok($panjang, $lebar, $tinggi);
}

class Luas implements BalokInterface
{
    public function hitungBalok($panjang, $lebar, $tinggi)
    {
        $DUA = 2;
        $hasil = $DUA * (($panjang * $lebar) + ($panjang * $lebar) + ($panjang * $lebar));
        echo "Luas Balok adalah : ". $hasil;
    }
}

class Volume implements BalokInterface
{
    public function hitungBalok($panjang, $lebar, $tinggi)
    {
        $hasil = $panjang * $lebar * $tinggi;
        echo "Volume Balok adalah : ". $hasil;
    }
}

class Keliling implements BalokInterface
{
    public function hitungBalok($panjang, $lebar, $tinggi)
    {
        $EMPAT = 4;
        $hasil = $EMPAT * ($panjang + $lebar + $tinggi);
        echo "Keliling Balok adalah : ". $hasil;
    }
}

class Balok
{
    public static function pilih($pilih)
    {
        switch ($pilih) {
            case 'luas':
                return new Luas;
                break;
            case 'volume':
                return new Volume;
                break;
            case "keliling":
                return new Keliling;
                break;
            default:
                return FALSE;
        }
    }
}

$panjang = 7;
$lebar = 3;
$tinggi = 3;
Balok::pilih('luas')->hitungBalok($panjang, $lebar, $tinggi);
echo '<br>';
Balok::pilih('volume')->hitungBalok($panjang, $lebar, $tinggi);
echo '<br>';
Balok::pilih('keliling')->hitungBalok($panjang, $lebar, $tinggi);

?>