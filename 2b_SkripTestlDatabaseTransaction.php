<?php

namespace Tests\Feature\Auth;

namespace App\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class DatabaseDosenTest extends TestCase
{
    use DatabaseTransactions;

    // insert data dosen ke dalam tabel dosen
    public function test_insert_into_tabel_dosen()
    {
        $dosen = Dosen::create([
            'nipy' => '041',
            'nidn' => '1016017701',
            'nama' => 'Muhammad Aziz, S.T., M.Cs',
            'jabfung' => 'AA',
            'email_dosen' => 'moch.aziz@tif.uad.ac.id',
            'avatar' => 'aziz.jpg'
        ]);

        $this->assertEquals('041', $dosen->nipy);
        $this->assertEquals('1016017701', $dosen->nidn);
        $this->assertEquals('Muhammad Aziz, S.T., M.Cs', $dosen->nama);
        $this->assertEquals('AA', $dosen->jabfung);
        $this->assertEquals('moch.aziz@tif.uad.ac.id', $dosen->email_dosen);
        $this->assertEquals('aziz.jpg', $dosen->avatar);
    }
}
