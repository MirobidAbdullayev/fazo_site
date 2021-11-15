<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(CarauselTableSeeder::class);
        $this->call(AboutTableSeeder::class);
        $this->call(ServicTableSeeder::class);
        $this->call(AboutServicTableSeeder::class);
        $this->call(StatisticTableSeeder::class);
        $this->call(TeamTableSeeder::class);
        $this->call(BlogTableSeeder::class);
        $this->call(ContactTableSeeder::class);
    }
}
