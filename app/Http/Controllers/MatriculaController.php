<?php

namespace App\Http\Controllers;

use App\Matricula;
use Illuminate\Http\Request;


class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registrar(Request $request)
    {
        Matricula::create($request->all());
      return response()->json('registro correctamente');
    }
    public function listmatriculacurso()
    {
        return response()->json(Matricula::all());
    }

   
}
