<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('backend.user.index', [
            'users' => $users,
            'email' => Auth::user()->email,
        ]);
    }

    public function add()
    {
        return view('backend.user.add', [
            'email' => Auth::user()->email,
        ]);
    }

    public function complete(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];
        $user = new User();
        $user->fill($data);
        $user->save();

        return redirect(route('admin.user.index'))->with('message', 'Add Success');
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('backend.user.edit', [
            'email' => Auth::user()->email,
            'user' => $user->toArray(),
        ]);
    }

    public function edit_complete($id, Request $request)
    {
        $user = User::find($id);
        $user->name = $request->post('name');
        $user->email = $request->post('email');
        $user->password = Hash::make($request->post('password'));
        $user->save();

        return redirect(route('admin.user.index'))->with('message', 'Edit Success.');
    }

    public function delete(Request $request)
    {
        User::destroy($request->id);

        return redirect(route('admin.user.index'))->with('message', 'Delete Success.');
    }

}
