<?php

use Illuminate\Database\Seeder;

class NewTodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Newtodo::class, 7)->create();
    }
}
