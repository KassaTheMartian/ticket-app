<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request) 
    {
        $request->validate([
            'email' => 'required|email|unique:customers,email|unique:users,email',
            'phone' => 'required|digits_between:10,11|unique:customers,phone|unique:users,phone',
        ]);

        $user = User::create($request->all());
        $user->sendEmailVerificationNotification();

        //User::create($request->all());
        return redirect()->route('users.index')->with('success', 'Người dùng đã được tạo.');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email|unique:customers,email,' . $id,
            'phone' => 'required|digits_between:10,11|unique:users,phone|unique:customers,phone,' . $id,
        ]);
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('users.index')->with('success', 'Người dùng đã được cập nhật.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Người dùng đã được xóa.');
    }
}