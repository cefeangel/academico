<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

use Request;

class CursoController extends Controller
{
    public function novo(){
        
        return view('curso.novo');
        
//        return view('')->with($key, $value);
    }
    
    public function lista(){
        
        $curso = DB::table('cursos')->get();
        return view('curso.lista')->with('cursos', $curso);
        
    }
    
    
    public function adiciona(){
        
        $curso = Request::input('curso');
        $descrisao = Request::input('descrisao');
        
        DB::table('cursos')->insert(
                [
                    'curso'=>$curso,
                    'descrisao'=>$descrisao
                ]
                );
        
//        return redirect('/cursos')->withInput(Request::only('curso'));
        return redirect()
            ->action('CursoController@lista')
            ->withInput(Request::only('curso'));
        
    }
}
