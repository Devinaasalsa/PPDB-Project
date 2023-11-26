<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Siswa;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'register_id' => '0000',
            'nama' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin1'),
            'role' => 'admin',
        ]);
        Siswa::create([
        'nisn' => '00000000',
        'uniquecode' => '0000',
        'jk' => 'perempuan',
        'nama' => 'admin',
        'asal_sekolah' => 'lain',
        'email' => 'lain@gmail.com',
        'no_hp' => '0000',
        'no_hp_ayah' => '0000',
        'no_hp_ibu' => '0000',
        ]);
    }
}
