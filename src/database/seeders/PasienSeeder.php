<?php

namespace Database\Seeders;

use App\Models\Pasien;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'no_rm' => 'RM20251025001',
                'nik' => '1234567890123456',
                'nama_lengkap' => 'Budi Doremi',
                'jenis_kelamin' => 'L',
                'tanggal_lahir' => '1983-03-03',
                'alamat' => 'Jl Terus Jadian Kagak No. 1',
                'kota' => 'Jakarta Barat',
                'provinsi' => 'DKI Jakarta',
                'telepon' => '081234567890',
                'email' => 'budi@doremi.com',
                'golongan_darah' => 'O',
                'pekerjaan' => 'Penyanyi',
                'status_pernikahan' => 'Belum Menikah',
            ],
            [
                'no_rm' => 'RM20251025002',
                'nik' => '1234567890123457',
                'nama_lengkap' => 'Raisa',
                'jenis_kelamin' => 'P',
                'tanggal_lahir' => '1988-03-03',
                'alamat' => 'Jl Terus Jadian Kagak No. 2',
                'kota' => 'Jakarta Barat',
                'provinsi' => 'DKI Jakarta',
                'telepon' => '081234567891',
                'email' => 'raisa@doremi.com',
                'golongan_darah' => 'AB',
                'pekerjaan' => 'Penyanyi',
                'status_pernikahan' => 'Belum Menikah',
            ],
        ];
        foreach ($data as $pasien){
            Pasien::firstOrCreate($pasien);
        }
    }
}