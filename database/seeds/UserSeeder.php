<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $user = User::create([
//            'email' => 'testing@dev.com',
//            'name' => 'Test',
//            'jugador' => 1,
//            'password' => bcrypt('123456'),
//        ]);

        $user = factory(App\Manager::class)->create([
            'email' => 'testing@dev.com',
            'nombre' => 'Test',
            'slug' => 'test',
            'password' => bcrypt('123456'),
            'nivel' => '3',
        ]);
    }
}
