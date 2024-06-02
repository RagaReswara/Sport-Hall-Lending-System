<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'email' => 'biro3@ukdw.ac.id' ,
            'password' => bcrypt('biro3'),
            'namaOrganisasi' => 'Biro 3',
            'no_telp' => '086742832714',
            'fakultas' => null,
            'prodi' => null 
        ]);
    }

    
    
}
