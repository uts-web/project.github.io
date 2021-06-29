<?php

use Illuminate\Database\Seeder;

class topupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\topup::class, 15)->create();
    }
}
