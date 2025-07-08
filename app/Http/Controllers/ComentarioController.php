<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;
use App\Models\Tarea;

class ComentarioController extends Controller
{
    public function ListarComentariosDeUnaTarea(Request $request, $idTarea){
        $comentarios = Comentario::where('id_tarea', $idTarea)->get();

        return $comentarios;
    }

    public function Ingresar(Request $request){
        $idTarea = $request->post('idTarea');
        $tarea = Tarea::findOrFail($idTarea);

        $comentario = new Comentario();
        $comentario->id_tarea = $request->post('id_tarea');
        $comentario->id_autor = $request->post('id_autor');
        $comentario->cuerpo = $request->post('cuerpo');

        return $comentario;
    }
}
