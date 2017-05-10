<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call('CursoTableSeeder');
    }
}

class CursoTableSeeder extends Seeder {
    
    public function run()
    {
        DB::table('cursos')->insert(
                ['curso'=>'Design',
                  'descrisao' => 'Design'
                ]
                );
        DB::table('cursos')->insert(
                ['curso'=>'Rede',
                  'descrisao' => 'Rede'
                ]
                );
    }
}
