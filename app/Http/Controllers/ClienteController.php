<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;


class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $Cliente=  Cliente::simplePaginate(5);
        return view('Cliente.index',compact('Cliente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('clientes.create');
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

        $Clientes= new Cliente();
        $Clientes->Nombre =$request-> Nombre;
        $Clientes->Tipo_documento =$request->Tipo_documento;
        $Clientes->numero_doc =$request->numero_doc;
        $Clientes->direccion =$request->direccion; 
        $Clientes->celular =$request->celular; 
        $Clientes->email =$request->email;
        $Clientes->save();
        return 'Nuevo customer agregado con exito' ;
        return redirect()->route('Cliente.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $Cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param  int $id
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //retun view('')
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$Cliente::->delete();
        //return redirect ()->route('Clientes.index');

        Cliente::destroy($id);
        //return redirect ()->route('Clientes.index');
        return 'se elimino el registro';
    }
}
