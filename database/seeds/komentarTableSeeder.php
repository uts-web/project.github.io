<?php

use Illuminate\Database\Seeder;

class komentarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\komentar::class, 5)->create();
    }
}
