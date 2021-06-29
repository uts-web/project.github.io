<?php

use Illuminate\Database\Seeder;

class paymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\payment::class, 5)->create();
    }
}
