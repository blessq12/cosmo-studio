<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function login(){
        return view('auth::login');
    }
    public function userLogin(Request $request){
        $valid = Validator::make($request->all(),[
            'email' => 'required',
            'password' => 'required'
        ],[]);
        if ($valid->fails()){
            return back()->withErrors($valid->errors());
        }

        if (!Auth::attempt($valid->validated())){
            return back()->withErrors(['user' => 'Пользователь не существует'])->withInput();
        }
        return redirect()->route('crm.index');
    }
    public function userLogout(Request $request){
        Auth::logout();
        $request->session()->regenerate();
        $request->session()->regenerateToken();
        return redirect()->route('root.index');
    }
}
