<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $data = $request->only('email', 'password');
        if (Auth::attempt($data)) {
            return redirect()->route('show-change-password');
        } else {
            return back();
        }
    }

    public function showFormChangePassword()
    {
        return view('change-password');
    }

    public function changePassword(Request $request)
    {
        $user = Auth::user();
        $currentPassword = $user->password;
//        $request->validate([
//            'currentPassword' => 'required',
//            'newPassword' => 'required|min:6',
//            'confirmPassword' => 'required|same:newPassword',
//        ]);
        if (!Hash::check($request->currentPassword, $currentPassword)) {
            return redirect()->back()->withErrors(['currentPassword' => 'Sai mat khau hien tai']);
        }
        $user->password = Hash::make($request->newPassword);
        $user->save();
        return redirect()->route('showFormLogin');

    }

    public function showFormResetPassword()
    {
        return view('reset-password');
    }

    public function resetPassword(Request $request)
    {
        $user=User::where('email',$request->email)->first();
        $defaultPassword=Hash::make('123456');
        $user->password=$defaultPassword;
        $user->save();
        return redirect()->route('showFormLogin');
    }
}
