<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function register (Request $request, User $user) {
        $this->validate($request,[
            'nama_user' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'no_hp' => 'required'
        ]);

        $user = $user->create([
            'nama_user' => $request->nama_user,
            'email' => $request->email,
            'password' =>bcrypt($request->password),
            'api_token' =>bcrypt($request->email),
            'no_hp' => $request->no_hp,
        ]);

        return [
            'status' => 1,
            'message' => 'Berhasil Daftar',
            'data' =>$user
        ];
    }

    public function login(Request $request, User $user) {
        $credential = [
            'email' => $request->email,
            'password' =>$request->password,
        ];

        if(!Auth::guard('web')->attempt($credential, $request->member)) {
            return [
                'status' => 0,
                'message' => 'Gagal Login'
            ];
        }
        $user = $user->find(Auth::user()->id);
        return [
            'status' => 1,
            'message' => 'Berhasil',
            'data' => $user
        ];
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
