<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
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
      \App\Models\Service::truncate();
      DB::statement('SET FOREIGN_KEY_CHECKS=1;');

      // Vilnius Branch
      \App\Models\Branch::create([
          'id'                => Str::uuid()->toString(),
          'title'             => 'UAB KINKANAS',
          'company_name'      => 'UAB KINKANAS',
          'company_code'      => '303140843',
          'company_vat'       => 'LT100008067119',
          'company_address'   => 'Žvejų g. 2, LT-09310, VILNIUS',
          'domain'            => 'https://www.ciopciop.lt/',
          'order_prefix'      => 'vln'
      ]);
    }
}
