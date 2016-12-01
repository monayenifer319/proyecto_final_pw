<?php

namespace TiendaEnLinea\Http\Controllers;

use Illuminate\Http\Request;

use TiendaEnLinea\Http\Requests;
use TiendaEnLinea\informe;
use TiendaEnLinea\producto;

class informeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informes = informe ::all();
        return view('informes.index', compact('informes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('informes.create');
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
            'fecha_inicio'     => 'required|min:3',
            'fecha_finalizacion'     => 'required|min:3',
            'user_id'     => 'required',
        ]);

        $datos = $request->all();
        informe::create($datos);
        return redirect('informes')->with('alertC', 'El informes ha sido creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $informe = informe::findOrFail($id);
        return view('informes.show', compact('informe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $informe = informe::findOrFail($id);
        return view('informes.edit', compact('informe'));
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
            'fecha_inicio'     => 'required|min:3',
            'fecha_finalizacion'     => 'required|min:3',
            'users_id'     => 'required'
        ]);
        $informe = informe::findOrFail($id);
        $informe->fill($request->all());
        $informe->save();
        return redirect('informes')->with('alertU', 'El informe ha sido editado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        informe::destroy($id);
        return redirect('informes')->with('alertD', 'El informe ha sido eliminado con exito');
    }
}
