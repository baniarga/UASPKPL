<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    //  Function basic
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    // testing route dan view login dosen
    public function test_halaman_login_sebagai_dosen()
    {
        $response = $this->get('/dosen');
        $response->assertSee('Login Sebagai Dosen');
    }
}
