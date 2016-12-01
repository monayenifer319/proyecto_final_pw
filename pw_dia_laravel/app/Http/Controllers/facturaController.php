<?php

namespace TiendaEnLinea\Http\Controllers;

use Illuminate\Http\Request;

use TiendaEnLinea\factura;
use TiendaEnLinea\Http\Requests;
use TiendaEnLinea\producto;

class facturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facturas = factura::all();
        return view('facturas.index',compact('facturas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = producto::all();
        return view('facturas.create', compact('productos'));
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
            'fecha_factura'     => 'required|min:3',
            'valor_total'     => 'required|min:1',
            'producto_id'     => 'required',
            'user_id'     => 'required'

        ]);
        $datos = $request->all();
        factura::create($datos);
        return redirect('facturas')->with('alertC', 'La factura ha sido creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $factura = factura::findOrfail($id);
        return view('facturas.show', compact('factura'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $factura = factura::findOrfail($id);
        return view('facturas.edit', compact('factura'));
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
            'fecha_factura'     => 'required|min:3',
            'valor_total'     => 'required|min:3',
            'producto_id'     => 'required',
            'user_id'     => 'required|numeric'
        ]);

        $factura = factura::findOrFail($id);
        $factura->fill($request->all());
        $factura->save();
        return redirect('facturas')->with('alert', 'La factura ha sido editada con éxito');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        factura::destroy($id);
        return redirect('facturas')->with('alert', 'La factura ha sido eliminada con éxito');;
    }
}
