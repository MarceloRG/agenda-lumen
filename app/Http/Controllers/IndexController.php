<?php

namespace CodeAgenda\Http\Controllers;

class indexController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index() {
        return view('layout');
    }

}
