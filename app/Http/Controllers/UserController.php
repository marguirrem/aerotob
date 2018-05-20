<?php

namespace App\Http\Controllers;

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
    $users = \App\User::all();
    return view('user.index',compact('users'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    $rols = \App\Rol::all();
    return view('user.create',compact('rols'));
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $data)
  {
    $user = \App\User::create([
      'first_name' => $data['first_name'],
      'second_name' => $data['second_name'],
      'first_last_name' => $data['first_last_name'],
      'second_last_name' => $data['second_last_name'],
      'address' => $data['address'],
      'telephone' => $data['telephone'],
      'cellphone' => $data['cellphone'],
      'email' => $data['email'],
      'password' => bcrypt($data['password']),
    ]);

    return redirect('user')->with('message','usuario creado con exito');
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    $user = \App\User::find($id);
    return view('user.show',compact('user'));
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    //
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
    //
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    //
  }
}
