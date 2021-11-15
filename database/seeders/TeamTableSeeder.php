<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::insert([
             'title'       => 'Jamoa',
             'description' => "Bizning eng kuchli qurolimiz bu jamoadagi hamjihatlik. Biz manashu kuchli jamoa bilan ko'plab yutuqlarga erishdik va shu yo'lda davom etmoqdamiz.",
             'photo_1'     => 'website/images/photo_2021-03-27_23-02-36_edited (2).jpg',
             'photo_2'     => 'website/images/photo_2021-03-27_23-02-36_edited (2).jpg',
             'photo_3'     => 'website/images/photo_2021-03-27_23-02-36_edited (2).jpg',
             'phone_1'     => '+99897 7000000',
             'phone_2'     => '+99897 7471111',
             'phone_3'     => '+99890 9392707',
             'email_1'     => 'abdulloh@gmail.com',
             'email_2'     => 'abduvahob@gmail.com',
             'email_3'     => 'abdullayev@gmail.com',
             'link_1'      => 'twitter.com',
             'link_2'      => 'facebook.com',
             'link_3'      => 'instagram.com',  
             'link_4'      => 'twitter.com',
             'link_5'      => 'facebook.com',
             'link_6'      => 'instagram.com', 
             'link_7'      => 'twitter.com',
             'link_8'      => 'facebook.com',
             'link_9'      => 'instagram.com', 
             'created_at'  => now(),
             'updated_at'  => now()
        ]);
    }
}
