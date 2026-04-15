<?php

namespace App\Http\Controllers;
use App\Models\Categoria;

use Illuminate\Http\Request;
USE App\Models\Libro;

class LibrosController extends Controller
{
    public function create()
    {
        $categorias = Categoria::all();
        return view('libros.create', compact('categorias'));
    }

        public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'isbn' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'editorial' => 'required|string|max:255',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        $libro = new Libro();
        $libro->nombre = $request->nombre;
        $libro->isbn = $request->isbn;
        $libro->autor = $request->autor;
        $libro->editorial = $request->editorial;
        $libro->categoria_id = $request->categoria_id;
        $libro->save();

        // Aquí puedes agregar la lógica para guardar el libro en la base de datos
        // Por ejemplo:
        // Libro::create($request->all());

        return redirect()->route('homa')->with('success', 'Libro agregado exitosamente');
    }

    public function edit($id)
    {
        $libro = Libro::findOrFail($id);
        $categorias = Categoria::all();
        return view('libros.edit', compact('libro', 'categorias'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'isbn' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'editorial' => 'required|string|max:255',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        $libro = Libro::findOrFail($id);
        $libro->nombre = $request->nombre;
        $libro->isbn = $request->isbn;
        $libro->autor = $request->autor;
        $libro->editorial = $request->editorial;
        $libro->categoria_id = $request->categoria_id;
        $libro->save();

        return redirect()->route('homa')->with('success', 'Libro actualizado exitosamente');
    }

    public function destroy($id)
    {
        $libro = Libro::findOrFail($id);
        $libro->delete();

        return redirect()->route('homa')->with('success', 'Libro eliminado exitosamente');
    }

  


}
