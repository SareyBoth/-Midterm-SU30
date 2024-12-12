<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinces = [
            ['id' => 1, 'name' => 'Banteay Meanchey'],
            ['id' => 2, 'name' => 'Battambang'],
            ['id' => 3, 'name' => 'Kampong Cham'],
            ['id' => 4, 'name' => 'Kampong Chhnang'],
            ['id' => 5, 'name' => 'Kampong Speu'],
            ['id' => 6, 'name' => 'Kampong Thom'],
            ['id' => 7, 'name' => 'Kampot'],
            ['id' => 8, 'name' => 'Kandal'],
            ['id' => 9, 'name' => 'Koh Kong'],
            ['id' => 10, 'name' => 'Kratié'],
            ['id' => 11, 'name' => 'Mondulkiri'],
            ['id' => 12, 'name' => 'Oddar Meanchey'],
            ['id' => 13, 'name' => 'Pailin'],
            ['id' => 14, 'name' => 'Phnom Penh'],
            ['id' => 15, 'name' => 'Preah Sihanouk'],
            ['id' => 16, 'name' => 'Preah Vihear'],
            ['id' => 17, 'name' => 'Prey Veng'],
            ['id' => 18, 'name' => 'Pursat'],
            ['id' => 19, 'name' => 'Ratanakiri'],
            ['id' => 20, 'name' => 'Siem Reap'],
            ['id' => 21, 'name' => 'Stung Treng'],
            ['id' => 22, 'name' => 'Svay Rieng'],
            ['id' => 23, 'name' => 'Takéo'],
            ['id' => 24, 'name' => 'Tboung Khmum'],
        ];

        DB::table('city')->insert($provinces);
    }
}
