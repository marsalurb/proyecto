<?php

namespace App\Http\Controllers;

use App\Purchaser;


use Illuminate\Http\Request;

class PurchaserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchasers = Purchaser::all();
        return view('purchasers/index', ['purchasers'=>$purchasers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('purchasers/create');
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
            'sex' => 'required|female or male',
            'birthdate' => 'required|date|after:now',
            'user_id' => 'required|exists:users,id'

        ]);

        $purchaser = new Purchaser($request->all());
        $purchaser->save();
        flash('Cliente creado correctamente');
        return redirect()->route('purchasers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Purchaser  $purchaser
     * @return \Illuminate\Http\Response
     */
    public function show(Purchaser $purchaser)
    {
        //return view('purchasers/show',['purchaser'=>$purchaser]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Purchaser  $purchaser
     * @return \Illuminate\Http\Response
     */
    public function edit(Purchaser $purchaser)
    {

        return view('purchasers/edit', ['purchaser' => $purchaser]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Purchaser  $purchaser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purchaser $purchaser)
    {
        $this->validate($request, [
            'sex' => 'required|female or male',
            'birthdate' => 'required|date|after:now',
            'user_id' => 'required|exists:users,id'
        ]);
        $user = $purchaser->user;
        $user->fill($request->all());
        $purchaser->fill($request->all());
        $purchaser->user_id = $user->id;
        $user->save();
        $purchaser->save();
        flash('Cliente modificado correctamente');
        return redirect()->route('purchasers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Purchaser  $purchaser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchaser $purchaser)
    {
        $purchaser->delete();
        flash('Cliente borrado correctamente');
        return redirect()->route('purchasers.index');
    }
}
