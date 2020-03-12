<?php

namespace App\Http\Controllers;
//Librerias
use Illuminate\Http\Request;
//Modelos
use App\Restaurante;
use App\Comentario;
use App\User;
use App\Rol;

class RestauranteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurantes = Restaurante::all();
        if(request()->segments()[0] === 'api') {
            return response()->json(compact('restaurantes'));
        }

        return view('welcome', compact('restaurantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $rol = Rol::find(2);
        // dd($rol->usuarios);
        // $user = User::find(2);
        // dd($user->rol->rol);
        $restaurante = Restaurante::findOrFail($id);
        $comentarios = Comentario::select('comentarios.id', 'comentarios.comentario', 'comentarios.estrella', 'comentarios.created_at', 'users.nombre', 'users.apellido')
                ->join('users', 'users.id', '=', 'comentarios.user_id')
                ->where('comentarios.restaurante_id', $restaurante->id)
                ->where('comentarios.aprovado', 1)
                ->orderBy('created_at', 'asc')
                ->get();
        return view('restaurante.show', compact('restaurante', 'comentarios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
