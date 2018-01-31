<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    // action -> trata uma requisicao
    public function index()
    {
//      $cursos = ['BDD', 'TDD', 'XP', 'Scrum'];
      $cursos = array('Lógica de programação', 'Desenvolvimento Web com PHP',
    'Algoritmos e estrutura de dados', 'Test Driven Development');
      return view('cursos.index', compact('cursos'));
      //return view('pasta . ou / pagina, compact...')
    }

    public function show($index) {
      $curso = $this->cursos[$index];
      return view('cursos.show', compact('curso'));
    }
}
