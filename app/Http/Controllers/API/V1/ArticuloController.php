<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\Articulo;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string', 'min:300'],
            'comunity' => ['required', 'numeric','exists:comunities,id'],
        ]);

        $article = Articulo::create([
            'title' => $request->title,
            'content' => $request->content,
            'comunity_id' => $request->comunity,
        ]);



        return response()->json($article->id, 201);
    }

    public function storeIMG(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'photo' => ['image', 'max:5000', 'mimes:jpg'],
            'id' => ['numeric'],
        ]);

        $request->photo->storeAs('articles/', $request->id . '.jpg', 'public');

        return response()->json("ok", 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Articulo $articulo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Articulo $articulo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Articulo $articulo)
    {
        //
    }
}
