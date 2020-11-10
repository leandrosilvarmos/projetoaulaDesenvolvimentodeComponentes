<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\noticias;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    //
    public function noticiasIndex()
    {
        //Codigo da API GET
        return response()->json(noticias::all());
    }
}
