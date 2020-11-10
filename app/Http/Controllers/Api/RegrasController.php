<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Regras;
use Illuminate\Http\Request;

class RegrasController extends Controller
{
    //
    public function regrasIndex()
    {
        //Codigo da API GET
        return response()->json(Regras::all());
    }
}
