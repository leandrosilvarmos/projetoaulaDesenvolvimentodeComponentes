<?php

namespace App\Http\Controllers;

use App\noticias;
use App\Regras;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    //

    public function index()
    {

        return view('condominio')->with('noticias', noticias::all())->with('regras', Regras::all());
    }
}
