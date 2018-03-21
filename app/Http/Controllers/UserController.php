<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users/index', ['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users/create');
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
            'dni' => 'required|max:9',
            'firstname' => 'required|max:255',
            'surname' => 'required|max:255',
            'surname2' => 'required|max:255',
            'email' => 'required|max:255',
            'addres' => 'required|max:255',
            'number' => 'required|max:255',
            'password' => 'required|max:255'
        ]);

        $user = new User($request->all());
        $user->save();
        flash('Usuario creado correctamente');
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users/show',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users/edit', ['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'dni' => 'required|max:9',
            'firstname' => 'required|max:255',
            'surname' => 'required|max:255',
            'surname2' => 'required|max:255',
            'email' => 'required|max:255',
            'addres' => 'required|max:255',
            'number' => 'required|max:255',
            'password' => 'required|max:255'
        ]);
        $user->fill($request->all());
        $user->save();
        flash('Usuario modificado correctamente');
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        flash('Usuario borrado correctamente');
        return redirect()->route('users.index');
    }
}
