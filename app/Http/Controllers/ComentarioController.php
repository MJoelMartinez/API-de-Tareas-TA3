<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;

class ComentarioController extends Controller
{
    public function ListarComentariosDeUnaTarea(Request $request, $idTarea){
        $comentarios = Comentario::where('id_tarea', $idTarea)->get();

        return $comentarios;
    }
}
