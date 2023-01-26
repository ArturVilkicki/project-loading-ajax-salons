<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class SalonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Clear table
      DB::statement('SET FOREIGN_KEY_CHECKS=0;');
      \App\Models\Salon::truncate();
      DB::statement('SET FOREIGN_KEY_CHECKS=1;');

      // Salon1
      \App\Models\Salon::create([
          'title'             => 'Kirpykla Jovita Lapkūnaite',
          'image'      => '/assets/images/download.webp',
          'rating'      => '5.0',
          'address'       => 'Naujamiestis, Kaunas',
          'service'   => 'male_haircut',
          'service_price'            => 20,
      ]);

      // Salon2
      \App\Models\Salon::create([
          'title'             => 'MenSalon',
          'image'      => '/assets/images/download2.webp',
          'rating'      => '4.0',
          'address'       => 'Tauro kalnas, Vilnius',
          'service'   => 'female_haircut',
          'service_price'            => 30,
      ]);

      // Salon3
      \App\Models\Salon::create([
          'title'             => 'Barbershop 712',
          'image'      => '/assets/images/download3.webp',
          'rating'      => '4.0',
          'address'       => 'Naujamiestis, Vilnius',
          'service'   => 'male_haircut',
          'service_price'            => 40,
      ]);

      // Salon4
      \App\Models\Salon::create([
          'title'             => 'Nieko, ataugs',
          'image'      => '/assets/images/download4.webp',
          'rating'      => '5.0',
          'address'       => 'Naujamiestis, Vilnius',
          'service'   => 'female_haircut',
          'service_price'            => 50,
      ]);

    }
}
