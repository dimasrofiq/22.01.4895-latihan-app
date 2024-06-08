<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\RakBuku;

class RakBukuTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_create(): void
    {
        $rak_buku = new RakBuku([
            'nama' => 'Contoh Rak',
            'lokasi' => 'C01',
            'keterangan' => 'Ini Contoh Rak Buku',
        ]);

        $this->assertEquals('Contoh Rak', $rak_buku->nama);
        $this->assertEquals('C01', $rak_buku->lokasi);
        $this->assertEquals('Ini Contoh Rak Buku', $rak_buku->keterangan);
    }

    public function test_show(): void
    {
        $rak_buku = new RakBuku([
            'nama' => 'Contoh Rak',
            'lokasi' => 'C01',
            'keterangan' => 'Ini Contoh Rak Buku',
        ]);

        $this->assertEquals('Contoh Rak', $rak_buku->nama);
        $this->assertEquals('C01', $rak_buku->lokasi);
        $this->assertEquals('Ini Contoh Rak Buku', $rak_buku->keterangan);
    }

    public function test_update(): void
    {
        $rak_buku = new RakBuku([
            'nama' => 'Contoh Rak',
            'lokasi' => 'C01',
            'keterangan' => 'Ini Contoh Rak Buku',
        ]);

        $rak_buku->nama = 'RakBuku Baru';
        $rak_buku->lokasi = 'CB01';
        $rak_buku->keterangan = 'rak_buku telah diubah.';

        $this->assertEquals('RakBuku Baru', $rak_buku->nama);
        $this->assertEquals('CB01', $rak_buku->lokasi);
        $this->assertEquals('rak_buku telah diubah.', $rak_buku->keterangan);
    }

    public function test_delete(): void
    {
        $rak_buku = new RakBuku([
            'nama' => 'Contoh Rak',
            'lokasi' => 'C01',
            'keterangan' => 'Ini Contoh Rak Buku',
        ]);

        $this->assertTrue($rak_buku->delete());
    }
}
