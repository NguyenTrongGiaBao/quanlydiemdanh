<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phần mềm điểm danh</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            height: 100vh;
            background-color: #343a40;
            padding-top: 20px;
        }
        .sidebar a {
            color: #fff;
            display: block;
            padding: 10px 20px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            padding: 20px;
        }
        .center {
            text-align: center;
        }
    </style>
</head>
<body>
    <form>
    @csrf
        <div class="container-fluid">
            <div class="row">

                <!-- Sidebar -->
                <div class="col-md-3 col-lg-2 sidebar">
                    <h4 class="text-center text-light mb-4">THPT CBD</h4>
                    <a href="{{ route('home') }}">Trang chủ</a>
                    <a href="#">Quản lý giáo viên</a>
                    <a href="#">Quản lý môn học</a>
                    <a href="{{ route('classes') }}">Lớp học</a>
                    <a href="#">Buổi học</a>
                    <a href="#">Điểm danh</a>
                    <a href="#">Báo cáo</a>
                    <hr class="text-light">
                    <a href="{{ route('welcome') }}" class="text-danger">Đăng xuất</a>
                </div>

                <!-- Nội dung chính -->
                <div class="col-md-9 col-lg-10 content">
                    <h2 class="mb-4">Danh sách học sinh</h2>
                    <table class="table table-striped table-hover mt-3">
                        <thead class="table-dark">
                            <tr class="center">
                                <th>Mã HS</th>
                                <th>Họ tên</th>
                                <th>Lớp</th>
                                <th>Chuyên cần</th>
                                <th>Trạng thái</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse($students as $student)
                        <tr class="center">
                            <td>{{ $student->student_id }}</td>
                            <td>{{ $student->student_name }}</td>
                            <td>{{ $student->class_id }}</td>
                            <td>{{ $student->student_diligence }}</td>
                            <td>{{ $student->status }}</td> 

                            <td>
                                <input type="radio" name="status_{{ $student->student_id }}" value="Có mặt">
                                <label>Có mặt</label>

                                <input type="radio" name="status_{{ $student->student_id }}" value="Muộn">
                                <label>Muộn</label>

                                <input type="radio" name="status_{{ $student->student_id }}" value="Nghỉ có phép">
                                <label>Nghỉ có phép</label>

                                <input type="radio" name="status_{{ $student->student_id }}" value="Nghỉ không phép">
                                <label>Nghỉ không phép</label>
                            </td>


                        </tr>
                        @empty
                        <tr class="center">
                            <td colspan="6" class="text-center">Không có học sinh.</td>
                        </tr>
                        @endforelse
                        </tbody>
                    </table>

                    <!-- Nút lưu điểm danh -->
                    <button class="btn btn-primary mt-3">Lưu điểm danh</button>

                </div>
            </div>
        </div>
    </form>
</body>
</html>
