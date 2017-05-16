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
        $this->call('AlunoTableSeed');
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

class AlunoTableSeed extends Seeder {
    
    public function run(){
        
        DB::table('alunos')->insert(
                [
                    'nome'=>'Eunice',
                    'dataNasc'=>'1987-02-02'
                ]
        );
        
        DB::table('alunos')->insert(
            [
                'nome'=>'Jose',
                'dataNasc'=>'1982-10-02'
            ]
        );
        
        DB::table('alunos')->insert(
            [
                'nome'=>'Carlos',
                'dataNasc'=>'1998-07-11'
            ]
        );
    }
    
    
}
