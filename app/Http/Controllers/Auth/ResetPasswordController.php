<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\PasswordResetToken;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class ResetPasswordController extends Controller
{
    public function showResetForm(Request $request)
    {
        $token = $request->query('code');
        $email = $request->query('email');

        session(['reset_token' => $token, 'reset_email' => $email]);

        return view('Auth.newPassword', ['token' => $token, 'email' => $email]);
    }

    public function reset(Request $request)
    {
        try {
            $request->validate([
                'password' => 'required|confirmed|min:8',
            ]);

            $token = session('reset_token');
            $email = session('reset_email');

            if (!$token || !$email) {
                return response()->json([
                    'sendResetPassword' => false,
                    'message' => 'Session hết hạn hoặc không hợp lệ. Vui lòng thử lại.',
                ], 401);
            }

            $reset = PasswordResetToken::where('token', $token)
                ->where('email', $email)
                ->first();

            if (!$reset) {
                return response()->json([
                    'sendResetPassword' => false,
                    'message' => 'Đường dẫn đặt lại mật khẩu không hợp lệ.',
                ], 401);
            }

            $user = User::where('email', $reset->email)->first();

            if ($user) {
                $user->password = Hash::make($request->password);
                $user->save();
            }

            PasswordResetToken::where('token', $token)->delete();
            session()->forget(['reset_token', 'reset_email']);

            return response()->json([
                'sendResetPassword' => true,
                'message' => 'Mật khẩu đã được thay đổi thành công.',
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'sendResetPassword' => false,
                'message' => 'Đã xảy ra lỗi: ' . $e->getMessage(),
            ], 500);
        }
    }



}
