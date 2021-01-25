<?php
class TokenListrik
{
    function nomorToken($nomorToken){
        if ($nomorToken == '1700018193') {
            return TRUE;
        }
    }
    
    function metodePembayaran($metodePembayaran){
        if ($metodePembayaran == 'Ovo') {
            return TRUE;
        }
    }

    function statusPembayaran($statusPembayaran){
        if ($statusPembayaran == 'Lunas') {
            return TRUE;
        }
    }


    function eksekusi($nomorToken, $metodePembayaran, $statusPembayaran){
        if ($this->nomorToken($nomorToken) == TRUE) {
            if ($this->metodePembayaran($metodePembayaran) == TRUE) {
                if ($this->statusPembayaran($statusPembayaran) == TRUE) {
                    return 'Transaksi Pembelian Token Berhasil';
                } else {
                    return 'Saldo Tidak Mencukupi';
                }
            } else {
                return 'Metode Pembayaran Tidak Didukung';
            }
        } else {
            return 'Nomor Token Tidak Terdaftar';
        }

    }
}

$topUp = new TokenListrik;
$cek = $topUp->eksekusi('1700018193', 'Ovo', 'Lunas');
echo $cek;