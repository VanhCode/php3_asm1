<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\SigninRequest;
use App\Mail\AuthMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class SigninController extends Controller
{
    public function signin(SigninRequest $request)
    {
        try {

            $user = User::where('email', $request->email)->first();

            if($user) {
                return response()->json([
                    'signin' => false,
                    'message' => 'Email này đã tồn tại.',
                    'errors' => [
                        'email' => ['Email này đã tồn tại.']
                    ]
                ], 401);
            } else {
                $user = new User;
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = Hash::make($request['password']);
                $user->save();

                Mail::to($user->email)->send(new AuthMail($user));

                return response()->json([
                    'signin' => true,
                    'message' => 'Đăng ký tài khoản thành công.'
                ], 201);
            }

        } catch (\Exception $e) {
            return response()->json([
                'signin' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
