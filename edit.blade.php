<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Học Sinh</title>

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
        }
    </style>
</head>
<body>

<form action="{{ route('update', $student->student_id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="container">
        <div class="form-box">
            <div class="title">Sửa Thông Tin Học Sinh</div>

            <div class="input-group">
                <label>Họ và tên</label>
                <input type="text" name="student_name"
                       value="{{ old('student_name', $student->student_name) }}">
            </div>

            <div class="input-group">
                <label>Ngày sinh</label>
                <input type="date" name="date_of_birth"
                       value="{{ old('date_of_birth', $student->date_of_birth) }}">
            </div>

            <div class="input-group">
                <label>Giới tính</label>
                <select name="gender">
                    <option value="M" {{ $student->gender == 'M' ? 'selected' : '' }}>Nam</option>
                    <option value="F" {{ $student->gender == 'F' ? 'selected' : '' }}>Nữ</option>
                    <option value="O" {{ $student->gender == 'O' ? 'selected' : '' }}>Khác</option>
                </select>
            </div>

            <div class="input-group">
                <label>Email</label>
                <input type="email" name="student_email"
                       value="{{ old('student_email', $student->student_email) }}">
            </div>

            <div class="input-group">
                <label>Số điện thoại liên hệ</label>
                <input type="text" name="parent_phone"
                       value="{{ old('parent_phone', $student->parent_phone) }}">
            </div>

            <div class="input-group">
                <label>Mã lớp học</label>
                <select name="class_id">
                    @foreach ($classes as $class)
                        <option value="{{ $class->id }}"
                            {{ $student->class_id == $class->id ? 'selected' : '' }}>
                            {{ $class->id }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="input-group">
                <label>Tên lớp học</label>
                <input type="text" value="{{ $student->class->class_name }}" disabled>
            </div>

            <button type="submit" class="submit-btn">Cập nhật</button>
        </div>
    </div>
</form>

</body>
</html>
