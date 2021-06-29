<?php

use Illuminate\Database\Seeder;

class kategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\kategori::class, 15)->create();
    }
}
