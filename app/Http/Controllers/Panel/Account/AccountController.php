<?php

namespace App\Http\Controllers\Panel\Account;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class AccountController extends Controller
{
    public function edit(User $account)
    {
        return view('panel.account.edit', compact('account'));
    }

    public function update(Request $request, User $account)
    {
        $data = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', Rule::unique('users')->ignore($account->id)],
            'mobile' => ['required', 'regex:/^09\d{9}$/', 'digits:11', 'numeric'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'two_factor_status' => ['required', 'in:off,sms,email'],
        ]);

        DB::beginTransaction();
        try {
            $account->update($data);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
        }

        return back();
    }
}
