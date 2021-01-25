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


    function eksekusi($nomorToken, $metodePembayaran, $statusPembayaran)

    {
        if ($this->nomorToken($nomorToken) == false) {
            return 'Transaksi Gagagl, Nomor Token Tidak Terdaftar';
        }
        if ($this->metodePembayaran($metodePembayaran) == false) {
            return 'Transaksi Gagal, Metode Pembayaran Tidak Didukung';
        }
        if ($this->statusPembayaran($statusPembayaran) == false) {
            return 'Transaksi Gagal, Saldo Tidak Mencukupi';
        }
        return 'Transaksi Pembelian Token Berhasil';
    }
}

$topUp = new TokenListrik;
$cek = $topUp->eksekusi('1700018193', 'Ovo', 'Lunas');
echo $cek;