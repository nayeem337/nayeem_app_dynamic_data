<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;

class AuthController extends Controller
{
    private $users;

    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $this->users = User::getAllUser();
        foreach ($this->users as $user)
        {
            if ($user['email'] == $request->email && $user['password'] == $request->password)
            {
                Session::put('user_id', $user['id']);
                Session::put('user_name', $user['name']);

                return redirect('/dashboard');
            }
        }
        return back()->with('message', 'Sorry, the email or password is invalid.');
    }


    public function logout()
    {
       Session::forget('user_id');
       Session::forget('user_name');

       return redirect('/');
    }

}
