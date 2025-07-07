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

    public function Crear(Request $request){
        $tarea = new Tarea();

        $tarea->titulo = $request->post('titulo');
        $tarea->id_autor = $request->post('id_autor');
        $tarea->usuario_asignado = $request->post('usuario_asignado');
        $tarea->cuerpo = $request->post('cuerpo');
        $tarea->fecha_de_expiracion = $request->post('fecha_de_expiracion');
        
        $tarea->save();

        return $tarea;
    }

    public function Eliminar(Request $request, $id){
        $tarea = Tarea::findOrFail($id);

        $tarea->delete();

        return response()->json(['deleted' => true]);
    }

    public function Modificar(Request $request, $id){
        $tarea = Tarea::findOrFail($id);

        $tarea->titulo = $request->post('titulo');
        $tarea->id_autor = $request->post('id_autor');
        $tarea->usuario_asignado = $request->post('usuario_asignado');
        $tarea->cuerpo = $request->post('cuerpo');
        $tarea->fecha_de_expiracion = $request->post('fecha_de_expiracion');
        
        $tarea->save();

        return $tarea;
    }
}