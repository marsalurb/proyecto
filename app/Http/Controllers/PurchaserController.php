<?php

namespace App\Http\Controllers;

use App\Purchaser;
use App\User;

use Illuminate\Http\Request;

class PurchaserController extends Controller
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
            'sex' => 'required|max:6',
            'birthdate' => 'date|before_or_equal:now'
        ]);

        $user = new User;
        $user->firstname = $request['firstname'];
        $user->surname = $request['surname'];
        $user->surname2 = $request['surname2'];
        $user->dni = $request['dni'];
        $user->number = $request['number'];
        $user->email = $request['email'];
        $user->address = $request['address'];
        $user->password = bcrypt($request['DNI']);

        $user->save();

        $purchaser = new Purchaser($request->all());
        $purchaser->user()->associate($user);
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
            'sex' => 'required|max:6',
            'birthdate' => 'date|before_or_equal:now'

        ]);
        $user = User::find($purchaser->user_id);
        $user->firstname = $request['firstname'];
        $user->surname = $request['surname'];
        $user->surname2 = $request['surname2'];
        $user->dni = $request['dni'];
        $user->number = $request['number'];
        $user->email = $request['email'];
        $user->address = $request['address'];
        $user->password = bcrypt($request['DNI']);

        $user->save();

        $purchaser->fill($request->all());
        $purchaser->user()->associate($user);
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
