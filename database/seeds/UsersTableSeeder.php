<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        factory(App\Models\User::class, 8)->create()->each(function ($u) {
            $u->formations()->save(factory(App\Models\UserFormation::class)->make(['user_id' => $u->id]));
            $u->formations()->save(factory(App\Models\UserFormation::class)->make(['user_id' => $u->id]));

            $u->specialties()->save(factory(App\Models\Specialty::class)->make());
        });

        factory(App\Models\User::class, 4)->create()->each(function ($u) {
            $u->specialties()->save(factory(App\Models\Specialty::class)->make());
            $u->specialties()->save(factory(App\Models\Specialty::class)->make());
        });

        factory(App\Models\User::class, 16)->create()->each(function ($u) {
            $u->specialties()->save(factory(App\Models\Specialty::class)->make());
        });
        */

        factory(App\Models\User::class, 1)->create(['firstname' => 'prenom','surname' => 'nom','login' => 'admin','password' => bcrypt('motdepasse')]);

        $t = ['A','B','C','D','E','F','G','H','I','J','K','L','M'];
        for($i = 0;$i < count($t);$i++)
        {
            factory(App\Models\User::class, 1)->create(['firstname' => 'prenom' . $t[$i],'surname' => 'nom' . $t[$i]]);
        }
    }
}
