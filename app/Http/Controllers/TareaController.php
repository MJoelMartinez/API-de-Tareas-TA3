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

    public function Buscar(Request $request, $id){
        $tarea = Tarea::findOrFail($id);

        return $tarea;
    }
}