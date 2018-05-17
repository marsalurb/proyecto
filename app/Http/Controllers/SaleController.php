<?php

namespace App\Http\Controllers;

use App\Sale;
use App\Employer;
use App\Purchaser;
use App\Item;


use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Sale::all();
        return view('sales/index', ['sales'=>$sales]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employers = Employer::all();
        $purchasers = Purchaser::all();
        return view('sales/create',['employers'=>$employers, 'purchasers'=>$purchasers]);





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
            'employer_id' => 'required|exists:employers,id',
            'purchaser_id' => 'required|exists:purchasers,id'

        ]);

        $sale = new Sale($request->all());
        $sale->save();
        flash('Venta creada correctamente');
        return redirect()->route('sales.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        $items = Item::all()->pluck('name', 'id');
        return view('items/itemSale',['sale'=>$sale, 'items'=>$items]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        $employers = Employer::all();
        $purchasers = Purchaser::all();
        return view('sales/edit',['employers'=>$employers,
            'purchasers'=>$purchasers, 'sale'=>$sale]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Sale $sale)
    {
        $this->validate($request, [
            'employer_id' => 'required|exists:employers,id',
            'purchaser_id' => 'required|exists:purchasers,id'
        ]);
        $user = $sale->employer->user;
        $employer = $sale->employer;
        $user->fill($request->all());
        $employer->fill($request->all());
        $sale->fill($request->all());
        $employer->user_id = $user->id;
        $user->save();
        $employer->save();
        $sale->save();
        flash('Empleado modificado correctamente');
        return redirect()->route('employers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        $sale->delete();
        flash('Venta borrada correctamente');
        return redirect()->route('sales.index');
    }
}
