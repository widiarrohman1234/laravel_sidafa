<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\UserDetail;

class UserController extends Controller
{
	function index(){
		$data['list_user'] = User::all();
		return view('admin.user.index', $data);
	}

	function create(){
		$data['level1'] =  DB::table('user')
        	->distinct ()
        	->get(['level1']);
        	
		$data['level2'] =  DB::table('user')
        	->distinct ()
        	->get(['level2']);
		return view('admin.user.create',$data);
	}

	function store(){
		$user = new User;
		$user->username = request('username');
		$user->email = request('email');
		$user->password = bcrypt(request('password'));
		$user->level1 = request('level1');
		$user->level2 = request('level2');
		$user->save();

		return redirect('admin/user')->with('success','Data Berhasil Ditambahkan');
		// dd(request()->all());
	}

	function show(User $user){
		$data['user'] = $user;
		return view('admin.user.show', $data);
	}

	function edit(User $user){
		$data['user'] = $user;
		$data['level1'] =  DB::table('user')
        	->distinct ()
        	->get(['level1']);
        	
		$data['level2'] =  DB::table('user')
        	->distinct ()
        	->get(['level2']);
		return view('admin.user.edit', $data);
	}

	function update(User $user){
		$user->username = request('username');
		$user->email = request('email');
		if(request('password')) $user->password = bcrypt(request('password'));
		$user->level1 = request('level1');
		$user->level2 = request('level2');
		$user->save();

		return redirect('admin/user')->with('success','Data Berhasil Diubah');
	}

	function destroy(user $user){
		$user->delete();
		return redirect('admin/user')->with('danger','Data Berhasil Dihapus');
	}

	function dashboard(){
		return view('admin/dashboard')->with('success','Login Berhasil, Selamat datang');
	}
}