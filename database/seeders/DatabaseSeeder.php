<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\CatatanPerjalanan;

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
            'name' => 'Wahid',
            'nik' => '1122334455660003',
            'password' => bcrypt('12345')
        ]);

        CatatanPerjalanan::create([
            'user_id' => 1,
            'tanggal' => '11-07-1998',
            'jam' => '15:30',
            'lokasi' => 'Grand Indonesia',
            'suhu' => '36',
        ]);
    }

    
}
