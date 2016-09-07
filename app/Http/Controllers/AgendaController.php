<?php

namespace CodeAgenda\Http\Controllers;
use CodeAgenda\Entities\Pessoa;
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

}
