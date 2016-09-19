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
    		'email' => 'haelioferreira@yahoo.com.br',
    		'password' => Hash::make('132123'),
    		'type' => 'administrador'
    	]);

    }
}
