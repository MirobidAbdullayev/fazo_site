<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::insert([
            'title'         => "Aloqa",
            'description'   => "Biz bilan aloqa o'rnatish uchun manashu manzil, telefon raqami va emaillar orqali bog'lanish imkoniga egasiz.",
            'email'         => "abdullayevmirobid2707@gmail.com",
            'number'        => "+99890 9392707",
            'location'      => "Toshkent shahri, O'zbekiston shoh ko'chasi, NestOne binosi, Fazo Office",
            'working_hours' => "Dushanbadan - Jumagacha ish vaqti 09:00 dan 18:00 gacha",
            'link_1'        => 'twitter.com',
            'link_2'        => 'facebook.com',
            'link_3'        => 'instagram.com', 
            'created_at'    => now(),
            'updated_at'    => now() 
        ]);
    }
}
