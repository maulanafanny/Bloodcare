<?php

namespace Database\Seeders;

use DateTime;
use App\Models\Need;
use App\Models\User;
use App\Models\Event;
use App\Models\Report;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Fanny Maulana',
            'username' => 'fannymaulana',
            'email' => 'fannymaulanarizky@yahoo.co.id',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(10)
        ]);

        User::create([
            'name' => 'Fanny Maulana Rizky',
            'username' => 'maulanafanny',
            'email' => 'maulanafanny38@gmail.com',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(10)
        ]);

        Report::create([
            'user_id' => 2,
            'date' => date('Y-m-d H:i:s'),
            'pressure' => '110/70',
            'hemo' => 'HbA',
            'blood' => 'O',
            'rhesus' => 'positif'
        ]);

        User::create([
            'name' => 'Administrator',
            'username' => 'admin',
            'email' => 'admin123@gmail.com',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(10),
            'admin' => true
        ]);

        Event::create([
            'title' => 'Donor Darah PMI Malang',
            'date' => new DateTime('2022-01-30T07:00:00'),
            'location' => 'Kota Malang',
            'provider' => 'BKM Polinema',
            'image' => 'img/bkm.jpeg'
        ]);
        
        Event::create([
            'title' => 'Gerakan 1000 Kantong Darah',
            'date' => new DateTime('2022-01-25T08:00:00'),
            'location' => 'Kota Malang',
            'provider' => 'Dompetdhuafa',
            'image' => 'img/g1000.jpeg'
        ]);
        
        Event::create([
            'title' => 'PBHICare VI',
            'date' => new DateTime('2022-01-19T09:00:00'),
            'location' => 'Kota Masamba',
            'provider' => 'PBHI Desa Patoloan',
            'image' => 'img/pbhi.png'
        ]);
        
        Event::create([
            'title' => 'Donor Darah GPP Bekasi',
            'date' => new DateTime('2022-01-12T10:00:00'),
            'location' => 'Kota Bekasi',
            'provider' => 'GPP dan PMI Kota Bekasi',
            'image' => 'img/gpp_bekasi.jpeg'
        ]);
        
        Event::create([
            'title' => 'HUT PMI Makassar',
            'date' => new DateTime('2022-01-08T11:00:00'),
            'location' => 'Kota Makassar',
            'provider' => 'PMI Kota Makassar',
            'image' => 'img/hut_pmi.jpeg'
        ]);
        
        Event::create([
            'title' => 'Donor Darah Sukarela',
            'date' => new DateTime('2022-01-01T15:00:00'),
            'location' => 'Kota Cirebon',
            'provider' => 'PMI Kota Cirebon',
            'image' => 'img/ddsukarela.jpg'
        ]);

        User::factory(10)->create();
        Event::factory(8)->create();
        Need::factory(30)->create();

    }
}
