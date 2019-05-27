<?php

use Illuminate\Database\Seeder;

class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = factory(App\Manager::class)->create([
            'email' => 'valentin@clickpassgoal.com',
            'nombre' => 'Valentin',
            'slug' => 'valentin',
            'password' => bcrypt('valentinCpg2019'),
            'nivel' => '10',
        ]);

        $user = factory(App\Manager::class)->create([
            'email' => 'gonzalo@clickpassgoal.com',
            'nombre' => 'Gonzalo',
            'slug' => 'gonzalo',
            'password' => bcrypt('gonzaloCpg2019'),
            'nivel' => '10',
        ]);


        $user = factory(App\Manager::class)->create([
            'email' => 'testing@dev.com',
            'nombre' => 'Test',
            'slug' => 'test',
            'password' => bcrypt('123456'),
            'nivel' => '3',
        ]);

        $user = factory(App\Manager::class)->create([
            'email' => 'facu@clickpassgoal.com',
            'nombre' => 'Facundo',
            'slug' => 'facundo',
            'password' => bcrypt('facuCpg2019'),
            'nivel' => '3',
        ]);

        $user = factory(App\Manager::class)->create([
            'email' => 'viqui@clickpassgoal.com',
            'nombre' => 'Victoria',
            'slug' => 'viqui',
            'password' => bcrypt('viquiCpg2019'),
            'nivel' => '3',
        ]);
    }
}
