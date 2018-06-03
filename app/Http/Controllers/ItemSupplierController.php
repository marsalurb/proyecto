<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ItemSupplier;
use App\Item;
use App\Supplier;

class ItemSupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $itemSuppliers = ItemSupplier::all();
        return view('itemSuppliers/index', ['itemSuppliers'=>$itemSuppliers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suppliers = Supplier::all()->pluck('name','id');
        $items = Item::all()->pluck('model','id');
        return view('itemSuppliers/create',['items'=>$items, 'suppliers'=>$suppliers]);
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
            'item_id' => 'required|exists:items,id',
            'supplier_id' => 'required|exists:suppliers,id',
        ]);
        $itemSuppliers = new ItemSupplier($request->all());
        $itemSuppliers->save();
        flash('Creado correctamente');
        return redirect()->route('itemSuppliers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $itemSupplier = ItemSupplier::find($id);
        $items = Item::all()->pluck('model','id');
        $suppliers = Supplier::all()->pluck('name','id');
        return view('itemSuppliers/edit',['itemSupplier'=> $itemSupplier,
            'items'=>$items, 'suppliers'=>$suppliers]);
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
            'item_id' => 'required|exists:items,id',
            'supplier_id' => 'required|exists:suppliers,id',
        ]);
        $itemSupplier = ItemSupplier::find($id);
        $itemSupplier->fill($request->all());
        $itemSupplier->save();
        flash('Modificado correctamente');
        return redirect()->route('itemSuppliers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $itemSupplier = ItemSupplier::find($id);
        $itemSupplier->delete();
        flash('Borrado correctamente');
        return redirect()->route('itemSuppliers.index');
    }
}
