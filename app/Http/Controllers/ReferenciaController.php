<?php

namespace App\Http\Controllers;

use App\Models\referencia;
use Illuminate\Http\Request;

class ReferenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
         // return view('referencia.index');
         $listado['referencia']=referencia::paginate(1);
         return view('referencia.index',$listado);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('referencia.create_referencia');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'modelo'=> 'max:15',
            'color'=> 'max:10',
        ]);

        $referencia = new referencia();
        $referencia->modelo = $request->input('modelo');
        $referencia->color = $request->input('color');

        // return response()->json($datosempleado);
        $datosreferencia=request()->except('_token');
        if($request->hasfile('foto')){
            $datosreferencia['foto']=$request->file('foto')->store('uploads','public');
        }
        referencia::insert($datosreferencia);
        return redirect('referencia');
    }

    /**
     * Display the specified resource.
     */
    public function show(referencia $referencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $referencia= referencia::findOrFail($id);
        return view('referencia.edit', compact('referencia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'modelo'=> 'max:10' .$id,
            'color'=> 'max:8',
        ]);

        $referencia = referencia::find($id);
        $referencia->modelo = $request->input('modelo');
        $referencia->color= $request->input('color');

        $datosreferencia=request()->except(['_token','_method']);
        
        if($request->hasfile('foto')){
            $referencia= referencia::findOrFail($id);
            Storage::delete('public/'.$referencia->foto);

            $datosreferencia['foto']=$request->file('foto')->store('uploads','public');
        }
       
        referencia::where('id','=','$id')->update($datosreferencia);
        $referencia->save();
        return redirect('referencia');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        referencia::destroy($id);
        return redirect('referencia');
    }
}
