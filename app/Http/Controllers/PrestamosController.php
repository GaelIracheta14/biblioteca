<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Prestamo;
use App\Models\Libro;

class PrestamosController extends Controller
{
    public function index()
    {
        // Obtener todos los préstamos con las relaciones de libro y usuario
        $prestamos = Prestamo::with(['libro', 'usuario'])->get();
        
        // Pasar los préstamos a la vista
        return view('prestamos.index', compact('prestamos'));
    }


    public function create()
    {
        return view('prestamos.create');
    }

    public function buscar_usuario(Request $request)
    {
        $usuario_id = $request->input('usuario_id');
        $usuario_nombre = $request->input('usuario_nombre');

        if(!empty($usuario_id)) {
            $usuario = User::findOrFail($usuario_id);

            return view('prestamos.create', compact('usuario'));


          //  $usuario = User::findOrFail($validated['usuario_id']);
          //  return response()->json($usuario);

    }

        if(!empty($usuario_nombre)) {
            $usuario = User::where('name', 'like', '%' . $usuario_nombre . '%')->first();

           return view('prestamos.create', compact('usuario'));
        }
        


    }

public function select_libro(Request $request)
{
    $usuario_id = $request->input('usuario_id');
    $usuario = User::findOrFail($usuario_id);
    $libros = Libro::where('estatus', 0)->orderBy('id','asc')->get(); // Solo libros disponibles

    // Pasa ambas variables a la vista
    return view('prestamos.select_libro', compact('libros', 'usuario', 'usuario_id'));
}

public function store(Request $request)
{
    $request->validate([
        'usuario_id' => 'required|exists:users,id',
        'libro_id' => 'required|exists:libros,id',
    ]);

    \DB::beginTransaction();
    
    try {
        // Crear el préstamo
        $prestamo = new Prestamo();
        $prestamo->usuario_id = $request->input('usuario_id');
        $prestamo->libro_id = $request->input('libro_id');
        $prestamo->save();
        
        // Actualizar el estatus del libro
        // Asumiendo que: 1 = disponible, 0 = prestado (o viceversa)
        // Según tu estructura, estatus es integer [0], podría ser 0 = disponible
        $libro = Libro::findOrFail($request->input('libro_id'));
        $libro->estatus = 1; // Cambia según tu lógica de negocio
        $libro->save();
        
        \DB::commit();
        
        return redirect()->route('prestamos.index')->with('success', 'Préstamo registrado exitosamente.');
        
    } catch(\Exception $e) {
        \DB::rollBack();
        return redirect()->route('prestamos.index')->with('error', 'Error al registrar el préstamo: ' . $e->getMessage());
    }
}

public function entregar($id)
{
    \DB::beginTransaction();
    try{

    $prestamo = Prestamo::findOrFail($id);
    $prestamo->estado = 'entregado';
    $prestamo->fecha_entrega = now();
    $prestamo->save();

    $libro = Libro::findOrFail($prestamo->libro_id);
    $libro->estatus = 0; // Cambia según tu lógica de negocio
    $libro->save();

    \DB::commit();
} catch(\Exception $e) {
        \DB::rollBack();
        return redirect()->route('prestamos.index')->with('error', 'Error al entregar el libro: ' . $e->getMessage());
    }

    return redirect()->route('prestamos.index')->with('success', 'Libro entregado exitosamente.');
}















}









