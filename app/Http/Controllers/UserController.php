<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
	public function daftar(Request $request)
	{
		User::create([
			'name' => $request->name,
			'username' => $request->username,
			'email' => $request->email,
			'password' => bcrypt($request->password)
		]);

		return redirect('/login')->with('success', 'Berhasil Sign Up!');
	}

	public function masuk(Request $request, User $user)
	{
		$data = [
			'username' => $request->username,
			'password' => $request->password
		];
		
		if (Auth::attempt($data) && User::where('username', $data['username'])->value('admin') == true) {
			session(['login' => 'admin']);
			return redirect('/home')->with('success', 'Berhasil login sebagai administrator!');
		} else if (Auth::attempt($data)) {
			return redirect('/home')->with('success', 'Berhasil login!');
		} else {
			return redirect()->back()->with('error', 'email atau password salah!');
		}
	}

	public function logout()
	{
		Session::flush();
		return redirect()->back()->with('success', 'Berhasil logout!');
	}

	function emailCheck()
	{
		return view('email_available');
	}

	function check(Request $request)
	{
		if ($request->get('email')) {
			$email = $request->get('email');
			$data = User::where('email', $email)->count();
			if ($data > 0) {
				echo 'not_unique';
			} else {
				echo 'unique';
			}
		}
	}

	/**
     * Display the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('dashboard.report', [
			'report' => $user
		]);
    }
}
