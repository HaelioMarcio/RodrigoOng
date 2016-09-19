<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
    	User::create([
    		'name' => 'Haelio Márcio',
    		'email' => 'profhaeliomarcio@gmail.com',
    		'password' => Hash::make('123123'),
    		'type' => 'Administrador'
    	]);

    }
}
