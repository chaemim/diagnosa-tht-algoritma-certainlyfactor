<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Auth;
use Hash;
use Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * halaman profil user
     * 
     */
    public function profil()
    {
        $user = User::findOrFail(Auth::user()->id);

        $label = 'Detail profil '.$user->name;

        return view('profil.index', compact('user', 'label'));
    }

    /**
     * halaman profil edit
     */
    public function profil_edit()
    {
        $user = User::findOrFail(Auth::user()->id);

        return view('profil.edit', compact('user'));
    }

    /**
     * halaman profil update
     */
    public function profil_update(Request $request)
    {
        $user = User::findOrFail(Auth::user()->id);

        Validator::extend('old_password', function ($attribute, $value, $parameters, $validator) {
            return Hash::check($value, current($parameters));
        }, 'The :attribute doesn\'t match current password.');

        $this->validate($request, [
            'name' => 'required|min:6',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'kontak' => 'required|numeric|digits_between:10,13|unique:users,kontak,'.$user->id,
            'old_password' => 'required_with:new_password,new_password_confirmation|min:5|old_password:'.Auth::user()->password,
            'new_password' => 'required_with:old_password,new_password_confirmation|confirmed|min:5|different:old_password',
            'new_password_confirmation' => 'required_with:old_password,new_password|min:5',
        ]);

        

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->kontak = $request->input('kontak');

        if (!empty($request->input('old_password'))) {
            $user->password = bcrypt($request->input('new_password'));
        }      

        $user->save();

        session()->flash('notif', 'Profile telah diperbaharui <i class="fa fa-smile-o"></i>');

        return redirect()->route('home.profil');
    }
}
