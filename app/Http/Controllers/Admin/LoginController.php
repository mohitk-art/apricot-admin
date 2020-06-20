<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => 'logout'] );
    }


//     public function index()
//     {
//         return view('admin/index');
//     }
    


  

//     public function loginForm()
//     {
//         return view('admin.auth.login');
//     }


// /* @POST
// */
// public function login(Request $request){
//     $this->validate($request, [
//         'email' => 'required|email',
//         'password' => 'required',
//         ]);

//     if (\Auth::attempt([
//         'email' => $request->email,
//         'password' => $request->password])
//     ){
//         return redirect('admin/dashboard');
//     }
//     return redirect(' admin/auth/login')->with('error', 'Invalid Email address or Password');
// }
// /* GET
// */
// public function logout(Request $request)
// {
//     if(\Auth::check())
//     {
//         \Auth::logout();
//         $request->session()->invalidate();
//     }
//     return  redirect(' admin/auth/login');
// }

}
