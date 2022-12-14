<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->role == "SPT_Manager")
            {
              return redirect()->route('admin.home');
            }
            else if (auth()->user()->role == "WP_Owner")
            {
              return redirect()->route('owner.home');
            }
            else if (auth()->user()->role == "WP_Manager")
            {
              return redirect()->route('manager.home');
            }
            else if (auth()->user()->role == "WP_HOCashup")//.home.blade.php
            {
                return redirect()->route('headoffice.home');
            }
            else if (auth()->user()->role == "WP_StoreCashup")
            {
                return redirect()->route('store.home');
            }
            else if (auth()->user()->role == "WP_Supplier")
            {
                return redirect()->route('supplier.home');
            }
            else
            {
              dd("No Role");
            }
        }
        else
        {
            return redirect()
            ->route('login')
            ->with('error','Incorrect email or password!.');
        }
    }
}
