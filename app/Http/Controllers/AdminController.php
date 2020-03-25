<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comentario;
use App\Restaurante;

use App\Exports\RestaurantsExport;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.inicio');
    }

    public function comentarios()
    {
        $comentarios = Comentario::orderBy('created_at', 'desc')->get();
        return view('admin.comentarios', compact('comentarios'));
    }

    public function aprobar(Comentario $comentario, Request $request)
    {
        $aprovado = $request->status == 'true' ? 1 : 0;
        $comentario->aprovado = $aprovado;
        $comentario->update();

        return response()->json(['message' => 'Comentario editado']);
    }

    public function restaurante()
    {
        return view('admin.restaurante');
    }

    public function restauranteStore(Request $request)
    {
        $restaurante = new Restaurante();
        $restaurante->nombre = $request->nombre;
        $restaurante->direccion = $request->direccion;
        $restaurante->telefono = $request->telefono;
        $restaurante->horario = $request->horario;
        $restaurante->save();
        return redirect()->back()->with('status', 'success');
    }

    public function download()
    {
        return Excel::download(new RestaurantsExport, 'restaurantes.xlsx');
    }
}
