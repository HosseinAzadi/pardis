<?php

namespace App\Http\Controllers\Panel\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\Province;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create()
    {
        $provinces = Province::all();
        return view('panel.users.create', compact('provinces'));
    }

    public function store(UserRequest $request , User $user)
    {
        $user->fill($request->all());
        $user->password = Hash::make( $request->password );
        $user->save();
        session()->flash('success', 'مشخصات کاربر با موفقیت ثبت شد.');
        return redirect()->route('users.edit', $user);
    }

    public function edit(User $user)
    {
        $provinces = Province::all();
        return view('panel.users.edit', compact('user' , 'provinces'));
    }

    public function update(UserRequest $request, User $user)
    {
        $user->fill($request->all())->save();
        session()->flash('success', 'مشخصات کاربر با موفقیت ویرایش شد.');
        return redirect()->back();
    }

    public function destroy(User $user)
    {

    }
}
