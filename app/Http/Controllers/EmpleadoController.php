<?php

namespace App\Http\Controllers;

use App\Models\empleado;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        // return view('empleado.index');
        $listado['empleado']=empleado::paginate(1);
        return view('empleado.index',$listado);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('empleado.create_empleado');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nombres'=> 'max:20',
            'primer_nombre'=> 'max:10',
            'segundo_nombre'=> 'max:10',
        ]);

        $empleado = new empleado();
        $empleado->nombres = $request->input('nombres');
        $empleado->primer_apellido = $request->input('primer_apellido');
        $empleado->segundo_apellido = $request->input('segundo_apellido');

        $datosempleado=request()->except('_token');
        if($request->hasfile('foto')){
            $datosempleado['foto']=$request->file('foto')->store('uploads','public');
        }
        empleado::insert($datosempleado);
        // return response()->json($datosempleado);
        return redirect('empleado');

        
    }

    /**
     * Display the specified resource.
     */
    public function show(empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $empleado= empleado::findOrFail($id);
        return view('empleado.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'nombres'=> 'max:20,matricula,' .$id,
            'primer_nombre'=> 'max:10',
            'segundo_nombre'=> 'max:10',
        ]);

        $empleado = empleado::find($id);
        $empleado->nombres = $request->input('nombres');
        $empleado->primer_apellido = $request->input('primer_apellido');
        $empleado->segundo_apellido = $request->input('segundo_apellido');

        $datosempleado=request()->except(['_token','_method']);
        
        if($request->hasfile('foto')){
            $empleado= empleado::findOrFail($id);
            Storage::delete('public/'.$empleado->foto);

            $datosempleado['foto']=$request->file('foto')->store('uploads','public');
        }
       
        empleado::where('id','=','$id')->update($datosempleado);
        $empleado->save();
        return redirect('empleado');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        empleado::destroy($id);
        return redirect('empleado');
    }
}
