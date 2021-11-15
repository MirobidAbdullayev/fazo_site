<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'AboutTitle'    => "Biz Haqimizda",
            'description'   => "Biz IT Texnologiyalar bo'yicha O'zbekistondagi eng ilg'or Kompaniyalardan biri hisoblanamiz.
            Bizning xizmat ko'rsatish darajamiz juda yuqori o'rinlarda turadi. Shu bilan birga bizning xizmatlar narx jihatidan boshqa kompaniya
            yoki agentliklarning xizmat narxlaridan arzon. Bizning mijozlarimiz ham doyimo bizdan mamnun bo'lgan holda biz bilan hamkorlikni davom 
            ettirib kelishmoqda. Hozirda juda ham ko'p mijozlarga egamiz."
            
        ]);
    }
}
