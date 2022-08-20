<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\Models\CatatanPerjalanan;
use App\Models\Poi;
use App\Models\RencanaPerjalanan;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'nik' => '1122334455660003',
            'email' => 'wahid@gmail.com',
            'username' => 'Wahid',
            'password' => bcrypt('12345678'),
            'role' => 'public'
        ]);

        User::create([
            'nik' => '1122334455660004',
            'email' => 'kevin@gmail.com',
            'username' => 'Kevin Rafee',
            'password' => bcrypt('12345678'),
            'role' => 'public'
        ]);

        User::create([
            'email' => 'aljabar@gmail.com',
            'username' => 'Aljabar',
            'password' => bcrypt('12345678'),
            'role' => 'poi'
        ]);

        User::create([
            'email' => 'ghost@gmail.com',
            'username' => 'Ghost',
            'password' => bcrypt('12345678'),
            'role' => 'poi'
        ]);

        Poi::create([
            'user_id' => 3,
            'lokasi' => 'Margo City',
            'lampiran' => 'surat-tanah.pdf'
        ]);

        Poi::create([
            'user_id' => 4,
            'lokasi' => 'St Manggarai',
            'lampiran' => 'bukti-stasiun.pdf'
        ]);

        CatatanPerjalanan::create([
            'user_id' => 1,
            'poi_id' => 1,
            'jam' => Carbon::now()->toTimeString(),
            'tanggal' => Carbon::now()->toFormattedDateString(),
            'suhu' => '36',
        ]);

        CatatanPerjalanan::create([
            'user_id' => 1,
            'poi_id' => 2,
            'jam' => Carbon::now()->toTimeString(),
            'tanggal' => Carbon::now()->toFormattedDateString(),
            'suhu' => '35,6',
        ]);

        CatatanPerjalanan::create([
            'user_id' => 2,
            'poi_id' => 2,
            'jam' => Carbon::now()->toTimeString(),
            'tanggal' => Carbon::now()->toFormattedDateString(),
            'suhu' => '36,7',
        ]);

        RencanaPerjalanan::create([
            'user_id' => 1,
            'poi_id' => 1,
            'jam' => Carbon::now()->toTimeString(),
            'tanggal' => Carbon::now()->toFormattedDateString()
        ]);

        RencanaPerjalanan::create([
            'user_id' => 1,
            'poi_id' => 2,
            'jam' => Carbon::now()->toTimeString(),
            'tanggal' => Carbon::now()->toFormattedDateString()
        ]);

        RencanaPerjalanan::create([
            'user_id' => 2,
            'poi_id' => 1,
            'jam' => Carbon::now()->toTimeString(),
            'tanggal' => Carbon::now()->toFormattedDateString()
        ]);
    }

    
}
