<?php

use Illuminate\Database\Seeder;
use App\User, App\Categoria;
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

        for($i = 0; $i <= 30; $i++){
            Categoria::create([
                'nome' => 'Camisa'.$i,
                'busca' => 'camisa'.$i,
                'descricao' => 'Caminas gola polo.'
            ]);
        }

    }
}
