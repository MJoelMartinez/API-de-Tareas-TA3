<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;

class TareaController extends Controller
{
    public function ListarTodas(Request $request){
        $tareas = Tarea::all();

        return $tareas;
    }

}