<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testDatabaseConnection()
    {
        // Lakukan koneksi ke database
        $koneksi = mysqli_connect('localhost', 'root', '', 'pelatihan');

        // Pastikan koneksi berhasil
        $this->assertNotFalse($koneksi, 'Gagal terkoneksi ke database: ' . mysqli_connect_error());
    }
}
