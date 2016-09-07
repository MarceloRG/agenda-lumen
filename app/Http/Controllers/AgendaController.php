<?php

namespace CodeAgenda\Http\Controllers;

use CodeAgenda\Entities\Pessoa;
use Illuminate\Http\Request;
class AgendaController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index($letra = 'A') {
        $pessoas = Pessoa::where('apelido', 'LIKE', $letra . '%')->get();
        return view('agenda', compact('pessoas'));
    }
    
    public function busca(Request $request) {
        $busca = $request->busca;
        $pessoas = [];
        if(!empty($busca)){
            $pessoas = Pessoa::where('nome', 'LIKE', "%{$busca}%")
            ->orWhere('apelido', 'LIKE', "%{$busca}%")->get();
        }
        return view('agenda', compact('pessoas'));
    }

 

}
