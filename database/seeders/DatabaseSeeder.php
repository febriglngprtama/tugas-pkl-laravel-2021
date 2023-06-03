<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Dashboard\Album;
use App\Models\Dashboard\Member;
use App\Models\Dashboard\Schedule;
use App\Models\Dashboard\Song;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        User::create([
            'name' => 'admin',
            'email' => 'admin@hola.co.us',
            'email_verified_at' => now(),
            'password' => bcrypt('12345'),
        ]);


        Member::create([
            'name' => 'Jeon Jung-kook',
            'role' => 'Vokal utama',
            'date_birth' => '1997-9-1',
            'place_birth' => 'Busan, South Korea',
            'image' => 'img/member/jk.jpg',
        ]);

        Member::create([
            'name' => 'Kim Seok-jin',
            'role' => 'Vokal',
            'date_birth' => '1992-12-4',
            'place_birth' => 'Anyang-si, South Korea',
            'image' => 'img/member/ks.jpg',
        ]);

        Member::create([
            'name' => 'Suga',
            'role' => 'Rapper',
            'date_birth' => '1993-3-9',
            'place_birth' => 'Taejeon-Dng, South Korea',
            'image' => 'img/member/suga.jpg',
        ]);

        Album::create([
            'name' => 'Map of the Soul: 7',
            'slug' => 'Map-of-the_Soul:-7',
            'realese_date' => '2020-2-21',
            'image' => 'img/album/MotS7.png',
        ]);

        Song::create([
            'album_id' => '1',
            'name' => 'ON',
            'duration' => '4:07',
        ]);

        Song::create([
            'album_id' => '1',
            'name' => 'Friends',
            'duration' => '3:19',
        ]);

        Song::create([
            'album_id' => '1',
            'name' => 'Filter',
            'duration' => '3:00',
        ]);

        Schedule::create([
            'name' => 'Agust D Tour in Jakarta',
            // 'slug' => 'agust-d-tour-in-jakarta',
            'date_start' => '2023-5-26',
            'date_end' => '2023-5-28',
            'place' => 'Ice BSD, Tanggerang',
        ]);
    }
}
