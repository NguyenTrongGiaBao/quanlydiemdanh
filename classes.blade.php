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
                    <a href="#">Lớp học</a>
                    <a href="#">Buổi học</a>
                    <a href="{{  route('attendance') }}">Điểm danh</a>
                    <a href="#">Báo cáo</a>
                    <hr class="text-light">
                    <a href="{{ route('welcome') }}" class="text-danger">Đăng xuất</a>
                </div>
                <!-- Nội dung chính -->
                <div class="col-md-9 col-lg-10 p-4">
                    <h2>Danh sách lớp</h2>

                    <a href="{{ route('createclass') }}" class="btn btn-primary mb-3">
                        Thêm lớp
                    </a>

                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                        <tr class="center">
                            <th>Mã lớp</th>
                            <th>Tên lớp</th>
                            <th>Chuyên ngành</th>
                            <th>Sĩ số</th>
                            <th></th>
                        </tr>   
                        </thead>
                        <tbody>
                            @forelse($classes as $class)
                                <tr class="text-center">
                                    <td>{{ $class->class_id }}</td>
                                    <td>{{ $class->class_name }}</td>
                                    <td>{{ $class->class->specialized ?? 'Chưa phân công' }}</td>
                                    <td>{{ $class->students_count }}</td>
                                    <td class="d-flex justify-content-center gap-2">

                                        <a href="{{ route('classshow', $class->class_id) }}"
                                        class="btn btn-info btn-sm">
                                            Xem học sinh
                                        </a>

                                        <a href="{{ route('classes.edit', $class->class_id) }}"
                                        class="btn btn-warning btn-sm">
                                            Sửa
                                        </a>

                                        <form action="{{ route('classes.delete', $class->class_id) }}"
                                            method="POST"
                                            onsubmit="return confirm('Bạn có chắc muốn xóa lớp này?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm">Xóa</button>
                                        </form>

                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">Không có lớp học.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
