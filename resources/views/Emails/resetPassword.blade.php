<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
</head>
<body>
<div>
    <h1>Đặt lại mật khẩu của bạn</h1>
    <p>Chúng tôi đã nhận được yêu cầu đặt lại mật khẩu cho tài khoản của bạn. Bạn có thể đặt lại mật khẩu bằng cách nhấp vào liên kết bên dưới:</p>
    <a href="{{ url('/auth/forgot_password/') . '/?code=' . $token . '&email=' . urlencode($email) }}">Đặt lại mật khẩu</a>
    <p>Nếu bạn không yêu cầu đặt lại mật khẩu, hãy bỏ qua email này.</p>
</div>
</body>
</html>
