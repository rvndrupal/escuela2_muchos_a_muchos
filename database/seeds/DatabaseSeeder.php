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

         factory(App\Curso::class, 21)->create();

         factory(App\Alumno::class, 100)->create()->each(function(App\Alumno $alumno){
            //se relaciona un post con un tag
            $alumno->cursos()->attach([
                rand(1,10), //el primer post se relaciona con las primeras cinco etiquetas
                rand(11,20),
                
            ]);
        });
    }
}
