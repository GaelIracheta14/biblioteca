<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Libro;

class HomaController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        if ($user->user_type === 'admin'){
            $libros=Libro::paginate(4);
            return view('homa.index', compact('libros'));
        }
        else{
            return view('homa.index_user');
        }
    }
}


