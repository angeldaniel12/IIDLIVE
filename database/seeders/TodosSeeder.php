<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; //Se crean los usuarios 
use Illuminate\Support\Facades\Hash; //Hash para el password 

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            $usercreador=User::create([
            'nombre' => 'Administrador',
            'nombreusuario' => 'Admin',
            'email' => 'admin1@gmail.com',
            'password' => bcrypt('admin124'),
            'tipo'=> '1',
            'role' => '0',
            'fechanac'=> '2022-12-12',
            ]);      

            $usercreador=User::create([
                'nombre' => 'Administrador2',
                'nombreusuario' => 'Admin2',
                'email' => 'admin2@gmail.com',
                'password' => bcrypt('admin125'),
                'tipo'=> '1',
                'role' => '0',
                'fechanac'=> '2022-12-12',
                ]);      
            
    }

}
