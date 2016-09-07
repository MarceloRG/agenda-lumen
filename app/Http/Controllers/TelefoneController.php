<?php

namespace CodeAgenda\Http\Controllers;

use CodeAgenda\Entities\Telefone;

class TelefoneController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function delete($id) {
        $telefone = Telefone::find($id);
        $pessoa = $telefone->pessoa;
        return view('telefone.delete', compact('pessoa', 'telefone'));
    }

    public function destroy($id) {
        Telefone::destroy($id);
        return redirect()->route('agenda.index');
    }

}
