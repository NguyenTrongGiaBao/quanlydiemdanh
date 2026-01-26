<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Thêm Lớp Học</title>
        <style>
            * {
                box-sizing: border-box;
                font-family: Arial, sans-serif;
            }

            body {
                margin: 0;
                min-height: 100vh;
                background: linear-gradient(to right, #5aa9ff 0%, #5aa9ff 30%, #ffffff 30%, #ffffff 70%, #5aa9ff 70%, #5aa9ff 100%);
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .container {
                width: 420px;
                background: #ffffff;
                padding: 30px;
                border-radius: 8px;
            }

            h2 {
                text-align: center;
                color: #1e6cff;
                margin-bottom: 25px;
            }

            label {
                font-weight: bold;
                display: block;
                margin-bottom: 6px;
            }

            input, select {
                width: 100%;
                padding: 10px;
                margin-bottom: 18px;
                border: 1px solid #ccc;
                border-radius: 6px;
            }

            button {
                width: 100%;
                padding: 12px;
                background: #1e6cff;
                color: #fff;
                border: none;
                border-radius: 6px;
                font-size: 16px;
                cursor: pointer;
            }

            button:hover {
                background: #155bd5;
            }

            .success {
                color: green;
                text-align: center;
                margin-bottom: 15px;
            }
        </style>
    </head>
    <body>

        <div class="container">
            <h2>Thông Tin Lớp Học</h2>

            @if(session('success'))
                <div class="success">{{ session('success') }}</div>
            @endif

            <form action="{{ route('classes.store') }}" method="POST">
                @csrf

                <label>Mã lớp học</label>
                <input type="text" name="class_id" placeholder="Nhập mã lớp" required>

                <label>Tên lớp học</label>
                <input type="text" name="class_name" placeholder="Nhập tên lớp" required>

                <label>Chuyên ngành</label>
                <input type="text" name="specialized" placeholder="VD: Marketing">

                <button type="submit"> 
                    Thêm lớp học
                </button>
            </form>
        </div>
    </body>
</html>
