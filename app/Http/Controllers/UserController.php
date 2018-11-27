<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('user.index', ['users' => $users]);
    }

    public function edit()
    {
        $user = Auth::user();
        
        return view('user.edit', ['user' => $user]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        if (Auth::check())
        {
            $user->update($request->all());

            return redirect()
                ->route('user.edit')
                ->with('level', 'success')
                ->with('message', 'Your information was successfully updated');
        }
    }
}
