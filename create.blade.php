<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Học Sinh</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #4e9dfc, #6ad2ff);
        }

        .container {
            width: 100%;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 0;
        }

        .form-box {
            width: 450px;
            background: #ffffff;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            animation: fadeIn 0.6s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .title {
            text-align: center;
            font-size: 26px;
            font-weight: bold;
            margin-bottom: 25px;
            color: #1877f2;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .input-group label {
            font-size: 15px;
            font-weight: bold;
            display: block;
            margin-bottom: 6px;
            color: #333;
        }

        .input-group input,
        .input-group select {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ddd;
            font-size: 15px;
            transition: 0.2s;
        }

        .input-group input:focus,
        .input-group select:focus {
            border-color: #1877f2;
            box-shadow: 0 0 5px rgba(24, 119, 242, 0.4);
            outline: none;
        }

        .submit-btn {
            width: 100%;
            padding: 14px;
            background: #1877f2;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 17px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
            transition: 0.2s;
        }

        .submit-btn:hover {
            background: #146ae6;
            transform: scale(1.02);
        }
    </style>
</head>
<body>
    <form action="{{ route('students.store') }}" method="POST">

    @csrf

    <div class="container">
        <div class="form-box">
            <div class="title">Thông Tin Học Sinh</div>

            <div class="input-group">
                <label>Họ và tên</label>
                <input type="text" name="student_name" placeholder="Nhập họ tên học sinh" required>
            </div>

            <div class="input-group">
                <label>Ngày sinh</label>
                <input type="date" name="date_of_birth">
            </div>

            <div class="input-group">
                <label>Giới tính</label>
                <select name="gender">
                    <option value="M">Nam</option>
                    <option value="F">Nữ</option>
                    <option value="O">Khác</option>
                </select>
            </div>

            <div class="input-group">
                <label>Email</label>
                <input type="email" name="student_email" placeholder="example@gmail.com">
            </div>

            <div class="input-group">
                <label>Số điện thoại liên hệ</label>
                <input type="text" name="parent_phone" placeholder="Nhập số điện thoại">
            </div>

            <div class="input-group">
                <label>Mã lớp học</label>
                <select type="text">
                    <option>116</option>
                    <option>631</option>
                </select>
            </div>

            <div class="input-group">
                <label>Tên lớp học</label>
                <select type="text">
                    <option>LT01K16</option>
                    <option>Sunwinland</option>
                </select>
            </div>

            <button type="submit" class="submit-btn">Thêm học sinh</button>
        </div>
    </div>
</form>

</body>
</html>
