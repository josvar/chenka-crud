<?php
/**
 * Created by PhpStorm.
 * User: gaston
 * Date: 05/06/14
 * Time: 18:40
 */
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {
    public function run()
    {
        $faker = Faker::create();

        User::truncate();

        //Unos usuarios fijos que no cambian....
        User::create([
            'username' => 'elrayo',
            'email' => 'elrayo@hotmail.com',
            'password' => 'invierno'
        ]);

        User::create([
            'username' => 'elgato',
            'email' => 'elgato@hotmail.com',
            'password' => 'invierno'
        ]);

        //20 Usuarios aleatorios
        foreach(range(1, 20) as $index)
        {
            User::create([
                'username' => $faker->userName(),
                'email' => $faker->email(),
                'password' => 'invierno'
            ]);
        }
    }
}