<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Carausels;

class CarauselTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carausels::create([
            'title'         => 'Fazo IT Agentligi xizmati',
            'description'   => "Fazo IT Agentligi sizga sifatli xizmat va samarali hamkorlikni taklif qiladi.
             Biz bilan siz IT olamining eng yuqori cho'qqilarini zabt etishingiz mumkin."
        ]);
    }
}
