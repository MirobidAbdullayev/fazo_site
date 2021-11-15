<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Servic;

class ServicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Servic::create([
            'title'         => "Xizmatlar",
            'description'   => "Bizning xizmat ko'rsatish jarayonimiz juda sifatli va betakror. Biz o'z xizmatlarimiz bilan doyimo mijozlarimizni hursand qilib kelamiz.",    
        ]);
    }
}
