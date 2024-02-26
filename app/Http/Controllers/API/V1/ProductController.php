<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\Comunity;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Obtener todas las comunidades de la base de datos
        $products = Product::all();

        // Devolver una respuesta JSON con las comunidades
        return response()->json($products);
    }

    // Método para mostrar una comunidad por su id
    public function show($id)
    {
        // Buscar la comunidad por el id
        $products = Product::find($id);

        // Si la comunidad no existe, devolver un error 404
        if (!$products) {
            return response()->json(['error' => 'Producto no encontrada'], 404);
        }

        // Devolver una respuesta JSON con la comunidad
        return response()->json($products);
    }

    // Método para crear una nueva comunidad
    public function store(Request $request)
    {
        // Validar los datos del request
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image',
        ]);

        // Crear la comunidad con los datos del request
        $comunity = Comunity::create($request->all());

        // Devolver una respuesta JSON con la comunidad creada y un código 201
        return response()->json($comunity, 201);
    }

    // Método para actualizar una comunidad por su id
    public function update(Request $request, $id)
    {
        // Buscar la comunidad por el id
        $comunity = Comunity::find($id);

        // Si la comunidad no existe, devolver un error 404
        if (!$comunity) {
            return response()->json(['error' => 'Comunidad no encontrada'], 404);
        }

        // Validar los datos del request
        $request->validate([
            'name' => 'sometimes|string|max:255',
            'description' => 'sometimes|string',
            'image' => 'sometimes|image',
        ]);

        // Actualizar la comunidad con los datos del request
        $comunity->update($request->all());

        // Devolver una respuesta JSON con la comunidad actualizada
        return response()->json($comunity);
    }

    // Método para eliminar una comunidad por su id
    public function destroy($id)
    {
        // Buscar la comunidad por el id
        $comunity = Comunity::find($id);

        // Si la comunidad no existe, devolver un error 404
        if (!$comunity) {
            return response()->json(['error' => 'Comunidad no encontrada'], 404);
        }

        // Eliminar la comunidad de la base de datos
        $comunity->delete();

        // Devolver una respuesta JSON vacía con un código 204
        return response()->json([], 204);
    }
}
