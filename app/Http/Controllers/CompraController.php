<?php

namespace App\Http\Controllers;

use App\Models\compra;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
         // return view('compra.index');
         $listado['compra']=compra::paginate(1);
         return view('compra.index',$listado);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('compra.create_compra');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'producto'=> 'max:20',
            'cantidad'=> 'max:3',
            'costo'=> 'max:7',
        ]);

        $compra = new compra();
        $compra->producto = $request->input('producto');
        $compra->cantidad = $request->input('cantidad');
        $compra->costo = $request->input('costo');

        // return response()->json($datosempleado);
        $datoscompra=request()->except('_token');
        if($request->hasfile('producto')){
            $datoscompra['producto']=$request->file('producto')->store('uploads','public');
        }
        compra::insert($datoscompra);
        return redirect('compra');
    }

    /**
     * Display the specified resource.
     */
    public function show(compra $compra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $compra= compra::findOrFail($id);
        return view('compra.edit', compact('compra'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'producto'=> 'max:15' .$id,
            'cantidad'=> 'max:3',
            'costo'=> 'max:7',
        ]);

        $compra = compra::find($id);
        $compra->producto = $request->input('producto');
        $compra->cantidad= $request->input('cantidad');
        $compra->costo = $request->input('costo');

        $compra->save();
        return redirect('compra');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        compra::destroy($id);
        return redirect('compra');
    }
}
