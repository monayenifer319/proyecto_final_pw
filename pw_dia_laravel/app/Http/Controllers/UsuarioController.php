<?php

namespace TiendaEnLinea\Http\Controllers;

use Illuminate\Http\Request;

use TiendaEnLinea\Http\Requests;
use TiendaEnLinea\User;
use TiendaEnLinea\Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all();
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           'nombre'     => 'required|min:3',
           'apellido'     => 'required|min:3',
           'password'     => 'required|min:6|confirmed',
           'email'     => 'required|unique:users|email',
           'direccion'     => 'required',
           'telefono'     => 'required|numeric'
        ]);

        $datos = $request->all();
        User::create($datos);
        return redirect('usuarios')->with('alertC', 'El usuario ha sido creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = User::findOrFail($id);
        return view('usuarios.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = User::findOrFail($id);
        return view('usuarios.edit', compact('usuario'));
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
        $this->validate($request, [
            'nombre'     => 'required|min:3',
            'apellido'     => 'required|min:3',
            'email'     => 'required|email',
            'direccion'     => 'required',
            'telefono'     => 'required|numeric'
        ]);
        $usuario = User::findOrFail($id);
        $usuario->fill($request->all());
        $usuario->save();
        return redirect('usuarios')->with('alertU', 'El usuario ha sido editado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('usuarios')->with('alertD', 'El usuario ha sido eliminado con exito');
    }
}
