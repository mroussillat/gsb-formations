<?php

use Illuminate\Database\Seeder;

class FormationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Formation::class, 16)->create()->each(function ($f) {
            $f->sessions()->save(factory(App\Models\Session::class)->make());
        });

        factory(App\Models\Formation::class, 8)->create()->each(function ($f) {
            $f->sessions()->save(factory(App\Models\Session::class)->make());
            $f->sessions()->save(factory(App\Models\Session::class)->make());
        });
    }
}
