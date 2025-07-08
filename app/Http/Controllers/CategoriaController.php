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
}
