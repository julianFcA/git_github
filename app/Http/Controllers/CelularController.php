<?php

namespace App\Http\Controllers;

use App\Models\celular;
use Illuminate\Http\Request;

class CelularController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // return view('celular.index');
        $listado['celular']=celular::paginate(1);
        return view('celular.index',$listado);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('celular.create_celular');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'marca'=> 'max:10',
            'precio'=> 'max:7',
        ]);

        $celular = new celular();
        $celular->marca = $request->input('marca');
        $celular->precio = $request->input('precio');

        // return response()->json($datosempleado);
        $datoscelular=request()->except('_token');
        if($request->hasfile('foto')){
            $datoscelular['foto']=$request->file('foto')->store('uploads','public');
        }
        celular::insert($datoscelular);
        return redirect('celular');
    }

    /**
     * Display the specified resource.
     */
    public function show(celular $celular)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $celular= celular::findOrFail($id);
        return view('celular.edit', compact('celular'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'marca'=> 'max:10' .$id,
            'precio'=> 'max:10',
            
        ]);

        $celular = celular::find($id);
        $celular->marca = $request->input('marca');
        $celular->precio = $request->input('precio');

        $datoscelular=request()->except(['_token','_method']);
        
        if($request->hasfile('foto')){
            $celular= celular::findOrFail($id);
            Storage::delete('public/'.$celular->foto);

            $datoscelular['foto']=$request->file('foto')->store('uploads','public');
        }
       
        celular::where('id','=','$id')->update($datoscelular);
        $celular->save();
        return redirect('celular');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        celular::destroy($id);
        return redirect('celular');
    }
}
