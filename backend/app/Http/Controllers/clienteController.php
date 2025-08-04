<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cliente;


class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->json(cliente::all());

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nombre' => 'required|string|max:50',
            'apellidos' => 'required|string|max:50',
            'direccion' => 'required|string|max:150',
            'celular' => 'required|string|max:50',
            'nit' => 'required|string|max:20',
        ]);
    
        $cliente = cliente::create($request->all());
    
        return response()->json([
            'mensaje' => 'Cliente registrado exitosamente',
            'cliente' => $cliente
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $cliente = cliente::find($id);

    if (!$cliente) {
        return response()->json(['mensaje' => 'Cliente no encontrado'], 404);
    }

    return response()->json($cliente, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $cliente = cliente::find($id);

    if (!$cliente) {
        return response()->json(['mensaje' => 'Cliente no encontrado'], 404);
    }

    $request->validate([
        'nombre' => 'required|string|max:50',
        'apellidos' => 'required|string|max:50',
        'direccion' => 'required|string|max:150',
        'celular' => 'required|string|max:50',
        'nit' => 'required|string|max:20',
    ]);

    $cliente->update($request->all());

    return response()->json([
        'mensaje' => 'Cliente actualizado exitosamente',
        'cliente' => $cliente
    ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $cliente = cliente::find($id);

    if (!$cliente) {
        return response()->json(['mensaje' => 'Cliente no encontrado'], 404);
    }

    $cliente->delete();

    return response()->json(['mensaje' => 'Cliente eliminado exitosamente'], 200);
    }
}
