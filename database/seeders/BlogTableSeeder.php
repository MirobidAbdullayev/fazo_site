<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;


class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::insert([
            'title_1'       => "So'ngi Yangiliklar",
            'title_2'       => "Kelgusi Rejalar",
            'image_1'       => "website/images/1610206641_13-p-chernii-fon-dlya-kompyutera-18.jpg",
            'image_2'       => "website/images/1610206669_9-p-chernii-fon-dlya-kompyutera-12.jpg",
            'image_3'       => "website/images/1610206688_16-p-chernii-fon-dlya-kompyutera-24.jpg",
            'description_1' => "Bizni kuzatishda davom eting va biz haqimizdagi so'ngi yangiliklarni manashu ilova orqali bilib oling.",
            'description_2' => "Biz kelgusi rejalarimizda o'z jamoamizni yanada kengaytirmoqchimiz. Shu bilan birga yangi loyihalar ustida ish
            olib bormoqdamiz. Yangilangan Fazo Loyihasini ishlab chiqish jarayoni ham juda qizg'in davom etmoqda. Yangicha uslub, yangicha loyihalar
            va yangicha Fazo.",
            'created_at'    => now(),
            'updated_at'    => now()

        ]);
    }
    
}
