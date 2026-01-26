<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Đăng nhập</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
                background-color: #f0f2f5;
            }

            .container {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                padding: 20px;
            }

            .left {
                width: 50%;
            }

            .left h1 {
                color: #1877f2;
                font-size: 60px;
                margin-bottom: 10px;
            }

            .left p {
                font-size: 26px;
                width: 80%;
                color: #1c1e21;
            }

            .right {
                width: 40%;
                display: flex;
                justify-content: center;
            }

            .login-box {
                width: 360px;
                background: #fff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 2px 6px rgba(0,0,0,0.2);
            }

            .login-box input {
                width: 100%;
                padding: 12px;
                margin: 8px 0;
                border: 1px solid #dddfe2;
                border-radius: 6px;
                font-size: 16px;
            }

            .login-box button {
                width: 100%;
                padding: 12px;
                background: #1877f2;
                border: none;
                color: white;
                border-radius: 6px;
                font-size: 18px;
                font-weight: bold;
                cursor: pointer;
            }

            .login-box button:hover {
                opacity: 0.95;
            }

            .login-box .forgot {
                display: block;
                text-align: center;
                margin: 12px 0;
                color: #1877f2;
                font-size: 14px;
                text-decoration: none;
            }

            .line {
                height: 1px;
                background: #ddd;
                margin: 10px 0;
            }

            .create-account {
                width: 100%;
                padding: 12px;
                background: #42b72a;
                color: white;
                border: none;
                font-size: 17px;
                border-radius: 6px;
                cursor: pointer;
                text-align: center;
                margin-top: 10px;
                font-weight: bold;
            }

            .create-account:hover {
                background: #36a420;
            }
        </style>
    </head>
    <body>

        <div class="container">
            <div class="left">
                <h1>Phần mềm điểm danh</h1>
                <p>Giúp bạn quản lý điểm danh dễ dàng</p>
            </div>

            <div class="right">
                <div class="login-box">
                    <form>
                        @csrf
                        <div class="form-group mb-3">
                            <input type="text" 
                                name="email" 
                                id="email" 
                                class="form-control @error('admin_email') is-invalid @enderror" 
                                value="{{ old('email') }}" 
                                required
                                placeholder="Email hoặc số điện thoại">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" 
                                name="password" 
                                id="password" 
                                class="form-control @error('user_password') is-invalid @enderror" 
                                required
                                placeholder="Mật khẩu">
                            @error('user_password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <a href="{{ route('home') }}" class="btn btn-primary w-100">Đăng nhập</a>
                    </form>

                    <a href="#" class="forgot">Quên mật khẩu?</a>

                    <div class="line"></div>

                    <button class="create-account">Tạo tài khoản mới</button>
                </div>
            </div>
        </div>

    </body>
</html>
