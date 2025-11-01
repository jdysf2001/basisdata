<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RumahSakit;

class PoliklinikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $poli = [
            ['kode' => 'POLI001', 'nama' => 'Poli Umum', 'desk' => 'Penyakit Umum', 'lokasi' => 'lantai 1'],
            ['kode' => 'POLI002', 'nama' => 'Poli Anak', 'desk' => 'Penyakit Anak', 'lokasi' => 'lantai 2'],
        ];
        foreach ($poli as $index => $poli) {
            Poliklinik::firstOrCreate([
                'rumah_sakit_id' => 1,
                'nama_poli' => $poli['nama'],
                'deskripsi' => $poli['desk'],
                'kode_poli' => $poli['kode'],
                'lokasi' => $poli['lokasi'],
                'jam_buka' => '08:00:00',
                'jam_tutup' => '16:00:00',
                'status' => 'aktif',
            ]);
        }
    }
}
