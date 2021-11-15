<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AboutServic;

class AboutServicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AboutServic::insert([
            [
                'title'         => "Hodimlar",
                'description'   => "Bizning Fazo IT Agentligi xizmati eng yaxshi hodimlarga ega. Eng yaxshi va malakali mutaxassislar 
                doyimo mijozlar uchun hizmat qilishga tayyordirlar.",
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'title'         => "Ajoyib Reyting",
                'description'   => "Bizning Agentlik Reyting jihatidan ham ko'p yillardan buyon, yuqori o'rinlarni egarlab kelmoda va 
                bu bizning Agentlik uchun juda muhumdir.",
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'title'         => "Kuchli Jamoa",
                'description'   => "Bizning eng kuchli qurolimiz bu jamoadagi hamjihatlik. Biz manashu kuchli jamoa bilan ko'plab yutuqlarga
                erishdik va shu yo'lda davom etmoqdamiz.",
                'created_at'    => now(),
                'updated_at'    => now()
            ]
        ]);
    }
}
