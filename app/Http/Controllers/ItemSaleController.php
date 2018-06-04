<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ItemSale;
use App\Sale;
use App\Item;

class ItemSaleController extends Controller
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
    public function index(Request $request)
    {
        $itemSales = ItemSale::name($request->get('name'))->orderBy('id', 'DESC')->paginate(500);
        //$itemSales = ItemSale::all();
        return view('itemSales/index',['itemSales'=>$itemSales]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Item::all()->pluck('model','id');
        $sales = Sale::all()->pluck('id');
        return view('itemSales/create',['items'=>$items, 'sales'=>$sales]);
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
            'sale_id' => 'required|exists:sales,id',
            'amount' => 'required',
        ]);
        $itemSale = new ItemSale($request->all());
        $itemSale->save();
        flash('Línea creada correctamente');
        return redirect()->route('itemSales.index');



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
    public function edit(ItemSale $itemSale)
    {
        /*$itemSale = ItemSale::find($id);
        $items = Item::all()->pluck('model', 'id');
        $sales = Sale::all()->pluck('id');
        return view('itemSales/edit',['itemSale'=> $itemSale, 'items'=>$items, 'sales'=>$sales]);
    }*/

        $items = Item::all()->pluck('model','id');
        $sales = Sale::all()->pluck('id','id');
        return view('itemSales/edit',['itemSale'=> $itemSale,
            'items'=>$items, 'sales'=>$sales]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItemSale $itemSale)
    {
        $this->validate($request, [
            'item_id' => 'required|exists:items,id',
            'sale_id' => 'required|exists:sales,id',
            'amount' => 'required',
        ]);
        //$itemSale = ItemSale::find($id);

        $itemSale->fill($request->all());
        $itemSale->save();
        flash('Línea modificada correctamente');
        return redirect()->route('itemSales.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $itemSale = ItemSale::find($id);
        $itemSale->delete();
        flash('Línea borrada correctamente');
        return redirect()->route('itemSales.index');
    }
}
