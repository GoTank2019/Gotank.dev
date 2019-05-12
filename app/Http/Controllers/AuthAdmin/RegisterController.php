<?php

namespace App\Http\Controllers\AuthAdmin;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Auth;
use DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('authAdmin.register');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return Admin::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    // public function register(Request $request)
    // {
    //     $this->validate($request,[
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //         'foto_admin' => ['required' ,'string', 'min:255'],
    //         'api_token' => [],
    //     ]);

    //     $admin = $admin->create([
    //         'name' => $request->name,
    //         'email'=> $request->email,
    //         'password'=>bcrypt($request->password),
    //         'api_token' => bcrypt($request->email),
    //         'foto_admin' => $request->foto_admin,
    //     ]);

    //     // if (Auth::guard('admin')->attempt($admin, $request->member)){

    //     //     return redirect()->intended(route('admin.dashboard'));
    //     //     }

    //     //     return redirect()->back()->withInput($request->only('email', 'remember'));
    //     // }

    // }

    public function register (Request $request, Admin $admin) {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:8',
            'api_token' => [],
            'foto_admin' => 'required',
        ]);

        $admin = $admin->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>bcrypt($request->password),
            'api_token' =>bcrypt($request->email),
            'foto_admin' => $request->foto_admin,
        ]);

        // return [
        //     'status' => 1,
        //     'message' => 'Berhasil Daftar',
        //     'data' =>$admin
        // ];
    }

    // public function login(Request $request, Admin $admin) {
    //     $credential = [
    //         'email' => $request->email,
    //         'password' =>$request->password,
    //     ];

    //     if(!Auth::guard('admin')->attempt($credential, $request->member)) {
    //         return [
    //             'status' => 0,
    //             'message' => 'Gagal Login'
    //         ];
    //     }
    //     $admin = $admin->find(Auth::admin()->id);
    //     return [
    //         'status' => 1,
    //         'message' => 'Berhasil',
    //         'data' => $admin
    //     ];
    // }
}
