<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        try {
            $user = User::where('email', $request->email)->first();

            if(!$user) {
                return response()->json([
                    'login' => false,
                    'message' => 'Email này không tồn tại.',
                ], 401);
            }

            if(!Hash::check($request->password, $user->password)) {
                return response()->json([
                    'login' => false,
                    'message' => 'Mật khẩu không đúng, vui lòng thử lại.',
                ], 401);
            }

            $token = $user->createToken('AuthToken')->plainTextToken;

            return response()->json([
                'login' => true,
                'message' => 'Đăng nhập thành công.',
                'user' => $user,
                'token' => $token,
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'signin' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
