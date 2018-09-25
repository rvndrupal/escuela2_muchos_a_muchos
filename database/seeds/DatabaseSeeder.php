<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(PermissionsTableSeeder::class);
         $this->call(UsersTableSeeder::class);
         $this->call(ProductsTableSeeder::class);

         factory(App\Curso::class, 5)->create();

         factory(App\Alumno::class, 10)->create()->each(function(App\Alumno $alumno){
            //se relaciona un post con un tag
            $alumno->cursos()->attach([
                rand(1,5), //el primer post se relaciona con las primeras cinco etiquetas
            
                
            ]);
        });
    }
}
