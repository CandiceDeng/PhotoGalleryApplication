<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class SessionsController extends Controller
{
    public function create()
    {
        return view('/login');
    }

    public function checkLogin(Request $request){
      $this -> validate($request, [
        'login-email' => 'required|email',
        'login-password' => 'required|password'
      ]);
      echo "<script>console.log('function');</script>";

      $userData = array (
                  'email' => $request->get ( 'login-email' ),
                  'password' => $request->get ( 'login-password' )
                  );
      if (Auth::attempt($userData)){
        echo "<script>console.log('success');</script>";
        return redirect()->to('/gallery');
      }else{
        return back()->withErrors([
            'message' => 'The email or password is incorrect, please try again'
        ]);
      }
    }

    public function successfulLogin() {
      view('/gallery');
    }
}
