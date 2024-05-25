<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class EstudianteController extends Controller
{
    public function showRegistro()
    {
        $estudiantes = Estudiante::all();
        return view('registro', compact('estudiantes'));
    }

    public function registrarNotas(Request $request)
    {
        $notas = $request->input('notas', []);
        foreach ($notas as $id => $nota) {
            $estudiante = Estudiante::find($id);
            if ($estudiante) {
                $estudiante->nota = $nota;
                $estudiante->save();
            }
        }
        return redirect()->back()->with('success', 'Notas registradas correctamente.');
    }
}

