<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Tarea;

class CategoriaController extends Controller
{
    public function ListarCategoriasDeUnaTarea(Request $request, $idTarea){
        $categorias = Categoria::where('id_tarea', $idTarea)->get();

        return $categorias;
    }

    public function Asignar(Request $request){
        $idTarea = $request->post('idTarea');
        $tarea = Tarea::findOrFail($idTarea);

        $categoria = new Categoria();
        $categoria->id_tarea = $request->post('idTarea');
        $categoria->nombre = $request->post('nombre');

        return $categoria;
    }
}
