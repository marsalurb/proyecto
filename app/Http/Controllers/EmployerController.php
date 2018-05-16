<?php

namespace App\Http\Controllers;

use App\Employer;
use App\Role;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employers = Employer::all();
        return view('employers/index', ['employers'=>$employers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$users = User::all();
        $roles = Role::all()->pluck('name');
        return view('employers/create', ['roles'=>$roles]);
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
            'role_id'=>'required|exists:roles,id',
            'salary'=>'numeric'
        ]);

        $employer = new Employer($request->all());
        $employer->save();
        flash('Empleado creado correctamente');
        return redirect()->route('employers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function show(Employer $employer)
    {
       // return view('employers/show',['employer'=>$employer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function edit(Employer $employer)
    {
        $roles=Role::all()->pluck('name');
        return view('employers/edit', ['employer' => $employer, 'roles' => $roles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employer $employer)
    {
        $this->validate($request, [
            'role_id'=>'required|exists:roles,id',
            'salary'=>'numeric'
        ]);
        $user = $employer->user;
        $user->fill($request->all());
        $employer->fill($request->all());
        $employer->user_id = $user->id;
        $user->save();
        $employer->save();
        flash('Empleado modificado correctamente');
        return redirect()->route('employers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employer $employer)
    {
        $employer->delete();
        flash('Empleado borrado correctamente');
        return redirect()->route('employers.index');
    }
}
