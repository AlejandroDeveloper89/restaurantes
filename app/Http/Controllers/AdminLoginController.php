<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest:admin')->except('logout');
      //$this->middleware('guest:admin', ['except' => ['logout']]);
    }
    
    public function showLoginForm()
    {
      return view('admin.auth.login');
    }
    
    public function login(Request $request)
    {
      // Validate the form data
      $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:6'
      ]);
      // Attempt to log the user in
      if (Auth::guard('admin')->attempt([
          'email' => $request->email, 
          'password' => $request->password,
          'rol_id' => 1
        ], $request->remember)) {
        // if successful, then redirect to their intended location
        return redirect()->route('admin.comentarios');
      }
      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->back()->withErrors('errors');
    }
    
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}