<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class UserwebController extends Controller
{
    public function indexAdmin()
    {
        $profile = Profile::all();
        return view('author.userweb.admin.index', ['profile' => $profile]);
    }

    public function indexUser()
    {
        return 'ini user';
    }

    public function create(Request $request)
    {
        // Insert ke table user
        $user = new \App\User;
        $user->role = 'admin';
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt('admin');
        $user->remember_token = str_random(60);
        $user->save();

        // Insert ke table profile
        $request->request->add(['user_id' => $user->id]);
        $profile = \App\Profile::create($request->all());

        return redirect('/admin')->with('success', 'Data Berhasil di Input');
    }

    public function profile($id)
    {
        $user = Profile::find($id);
        return view('author.userweb.profile', ['user' => $user]);
    }

    public function edit($id)
    {
        $user = Profile::find($id);
        return view('author.userweb.edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $user = Profile::find($id);
        $user->update($request->all());
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
            $user->avatar = $request->file('avatar')->getClientOriginalName();
            $user->save(); 
        }


        if (Auth::user()->role == 'superadmin')
        {
            return redirect('/admin')->with('success', 'Data Berhasil di Update');
        }else{
            return redirect('/dashboard')->with('success', 'Data Berhasil di Update');
        }
    }

    public function destroy($id)
    {
        $user = Profile::find($id);
        $user->delete();
        return redirect('/admin')->with('success', 'Data Berhasil di Hapus');
    }
}
