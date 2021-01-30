<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;

class AuthController extends Controller
{
	function showLogin(){
		return view('login');
	}

	function loginProcess(User $user){
		if(Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
			return redirect('admin/dashboard')->with('success','Login Berhasil, Selamat datang');
		} else {
			return back()->with('danger', 'Login gagal, Silahkan coba kembali');
		}
		//dd(request()->all());
	}

	function logout(){
		Auth::logout();
		return redirect('login');
	}

	function forgotPassword(){
		
	}

}