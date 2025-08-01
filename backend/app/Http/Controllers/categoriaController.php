<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;

class categoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->json(categoria::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //crear validaciones para formularios
        $request->validate([
            'nombre'=>'required',
            'descripcion'=>'nullable'
        ]);
        $categorias=categoria::create($request->all());
        return response()->json([
            'mensaje'=>'categoria creada exitosamente',
            'categoria'=>$categorias
        ], 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $categoria = categoria::find($id);

    if (!$categoria) {
        return response()->json(['mensaje' => 'Categoría no encontrada'], 404);
    }

    return response()->json($categoria, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $categoria = categoria::find($id);

        if (!$categoria) {
            return response()->json(['mensaje' => 'Categoría no encontrada'], 404);
        }
    
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'nullable',
        ]);
    
        $categoria->update($request->all());
    
        return response()->json([
            'mensaje' => 'Categoría actualizada exitosamente',
            'categoria' => $categoria
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $categoria = categoria::find($id);

    if (!$categoria) {
        return response()->json(['mensaje' => 'Categoría no encontrada'], 404);
    }

    $categoria->delete();

    return response()->json(['mensaje' => 'Categoría eliminada exitosamente'], 200);
    }
}
