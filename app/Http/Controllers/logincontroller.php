<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\login;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use mysqli;
use PHPUnit\Framework\MockObject\Rule\Parameters;

class logincontroller extends Controller
{
    public function index()
    {
        return view('login/login');
    }
    public function login(Request $request)
    {
        $login = login::where('username', $request->username)
            ->where('password', $request->password)
            ->first();
         if( ! empty($login))  
         {
            $request->session()->put('id',$login->id_login);
            if($login->level == 'admin')
            {
                return redirect('dashboard');
            }
            else if($login->level == 'siswa')
            {
                return redirect('user');
            }
            else if($login->level == 'guru')
            {
                return redirect('user1');
            }
         }
        $request->session()->flash('failed', 'username atau password salah');
        return redirect('/');
    }
   
    public function logout() 
    {
		session()->flush();
        return redirect('/');
	}
}