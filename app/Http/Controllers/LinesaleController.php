<?php

namespace App\Http\Controllers;

use App\Linesale;
use Illuminate\Http\Request;

class LinesaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $linesales = Linesale::all();
        return view('linesales/index', ['linesales'=>$linesales]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sales = Sales::all();
        $items = Items::all();
        return view('linesales/create',['sales'=>$sales, '$items'=>$items]);

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
            'amount' => 'required|max:10',
            'item_id' => 'required|exists:items,id',
            'sale_id' => 'required|exists:sales,id'

        ]);

        $linesale = new Linesale($request->all());
        $linesale->save();
        flash('LineaVenta creada correctamente');
        return redirect()->route('linesales.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Linesale  $linesale
     * @return \Illuminate\Http\Response
     */
    public function show(Linesale $linesale)
    {
        return view('linesales/show',['linesale'=>$linesale]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Linesale  $linesale
     * @return \Illuminate\Http\Response
     */
    public function edit(Linesale $linesale)
    {
        $items = Item::all();
        $sales = Sale::all();
        return view('linesales/edit',['items'=>$items, 'sales'=>$sales]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Linesale  $linesale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Linesale $linesale)
    {
        $this->validate($request, [
            'amount' => 'required|max:10',
            'item_id' => 'required|exists:items,id',
            'sale_id' => 'required|exists:sales,id'
        ]);
        $linesale->fill($request->all());
        $linesale->save();
        flash('LineaVenta modificado correctamente');
        return redirect()->route('lnesales.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Linesale  $linesale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Linesale $linesale)
    {
        $linesale->delete();
        flash('LineaVenta borrada correctamente');
        return redirect()->route('linesales.index');
    }
}
