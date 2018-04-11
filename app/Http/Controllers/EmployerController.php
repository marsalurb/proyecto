<?php

namespace App\Http\Controllers;

use App\Employer;
use App\User;
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
        $users = User::all()->pluck('id','firstname');
        return view('employers/create',['users'=>$users]);
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
            'user_id' => 'required|exists:users,id'

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
        return view('employers/show',['employer'=>$employer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function edit(Employer $employer)
    {
        $users=User::all()->pluck('firstname','id');
        return view('employers/edit', ['employer' => $employer, 'users' => $users]);
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
            'user_id' => 'required|exists:users,id'
        ]);
        $employer->fill($request->all());
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
