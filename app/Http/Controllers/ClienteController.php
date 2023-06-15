<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        //return view('cliente.index');
        $listado['cliente']=cliente::paginate(1);
        return view('cliente.index',$listado);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('cliente.create_cliente');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'primer_nombre'=> 'max:10',
            'segundo_nombre'=> 'max:10',
            'primer_apellido'=> 'max:10',
            'segundo_apellido'=> 'max:10',
            'edad'=> 'max:3',
            'direccion'=> 'max:20',
            'correo'=> 'max:20',
            
        ]);

        $cliente = new cliente();
        $cliente->primer_nombre = $request->input('primer_nombre');
        $cliente->primer_nombre = $request->input('segundo_nombre');
        $cliente->primer_apellido = $request->input('primer_apellido');
        $cliente->segundo_apellido = $request->input('segundo_apellido');
        $cliente->edad = $request->input('edad');
        $cliente->direccion = $request->input('direccion');
        $cliente->correo = $request->input('correo');

        // return response()->json($datosempleado);
        $datoscliente=request()->except('_token');
        if($request->hasfile('firma')){
            $datoscliente['firma']=$request->file('firma')->store('uploads','public');
        }
        cliente::insert($datoscliente);
        return redirect('cliente');
    }

    /**
     * Display the specified resource.
     */
    public function show(cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $cliente= cliente::findOrFail($id);
        return view('cliente.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'primer_nombre'=> 'max:10',
            'segundo_nombre'=> 'max:10',
            'primer_apellido'=> 'max:10',
            'segundo_apellido'=> 'max:10',
            'edad'=> 'max:10',
            'direccion'=> 'max:10',
            'correo'=> 'max:10',

        ]);

        $cliente = cliente::find($id);
        $cliente->primer_nombre = $request->input('primer_nombre');
        $cliente->segundo_nombre = $request->input('segundo_nombre');
        $cliente->primer_apellido = $request->input('primer_apellido');
        $cliente->segundo_apellido = $request->input('segundo_apellido');
        $cliente->edad = $request->input('edad');
        $cliente->direccion = $request->input('direccion');
        $cliente->correo = $request->input('correo');

        $datoscliente=request()->except(['_token','_method']);
        
        if($request->hasfile('firma')){
            $cliente= cliente::findOrFail($id);
            Storage::delete('public/'.$cliente->foto);

            $datoscliente['firma']=$request->file('firma')->store('uploads','public');
        }
       
        cliente::where('id','=','$id')->update($datoscliente);
        $cliente->save();
        return redirect('cliente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        cliente::destroy($id);
        return redirect('cliente');
    }
}
