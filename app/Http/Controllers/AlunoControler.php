<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoControler extends Controller
{
    
    
    public function novo(){
        
      return  view('aluno.novo');
        
    }
    
    
}
