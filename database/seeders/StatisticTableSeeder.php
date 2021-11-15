<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Statistic;

class StatisticTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Statistic::insert([
            'number_1'        => 18000,
            'title_1'         => 'Yoqdi',
            'number_2'        => 12500,
            'title_2'         => 'Mijozlar',
            'number_3'        => 500,
            'title_3'         => 'Loyihalar',    
            'number_4'        => 125,
            'title_4'         => 'Hodimlar',
            'created_at'      => now(),
            'updated_at'      => now()
            
        ]);
    }
}
