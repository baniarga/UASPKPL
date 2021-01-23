<?php

class Balok{
    
    public function __construct($DUA = 2, $EMPAT = 4){
        $this->DUA = $DUA;
        $this->EMPAT = $EMPAT;
    }

    public function luasBalok($panjang, $lebar){
        echo "Luas Balok adalah : ". $this->DUA * (($panjang * $lebar) + ($panjang * $lebar) + ($panjang * $lebar));
    }

    public function volumeBalok($panjang, $lebar, $tinggi){
        echo "Volume Balok adalah : ". $panjang * $lebar * $tinggi;
    }

    public function kelilingBalok($panjang, $lebar, $tinggi){
        echo "Keliling Balok adalah : ". $this->EMPAT * ($panjang + $lebar + $tinggi);
    }

    public function noChoice()
    {
        echo 'Anda tidak memilih';
    }

    public function prosesHitungBalok ($hitungBalok, $panjang, $lebar, $tinggi)
    {
        switch ($hitungBalok) {
            case 'luas':
                $this->luasBalok($panjang, $lebar);
                break;
            case 'volume':
                $this->volumeBalok($panjang, $lebar, $tinggi);
                break;
            case "keliling":
                $this->kelilingBalok($panjang, $lebar, $tinggi);
                break;
            default:
            $this->noChoice();
        }
    }
}

$panjang = 7;
$lebar = 3;
$tinggi = 3;
$hitungBalok = new Balok;
$hitungBalok->prosesHitungBalok('keliling', $panjang, $lebar, $tinggi);

?>
