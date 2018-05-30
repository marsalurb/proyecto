<?php

namespace App\Http\Controllers;

use App\Sale;
use App\Employer;
use App\Purchaser;
use App\Item;


use Illuminate\Http\Request;

class SaleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

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
        $employers = Employer::all()->pluck('fullname', 'id');
        $purchasers = Purchaser::all()->pluck('fullname', 'id');
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
        $items = Item::all()->pluck('model', 'id');
        return view('sales/itemSale',['sale'=>$sale, 'items'=>$items]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        $employers = Employer::all()->pluck('fullname', 'id');
        $purchasers = Purchaser::all()->pluck('fullname', 'id');
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
        $sale->fill($request->all());
        $sale->save();
        flash('Venta modificada correctamente');
        return redirect()->route('sales.index');




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


