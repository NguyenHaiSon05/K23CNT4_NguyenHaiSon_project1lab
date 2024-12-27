<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách sinh viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container">

        <div class="card">
            <div class="card-headear">
                <h1>Danh sách sinh viên</h1>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Mã sinh viên</th>
                            <th>Họ sinh viên</th>
                            <th>Tên sinh viên</th>
                            <th>Giới tính</th>
                            <th>Ngày sinh</th>
                            <th>Nơi sinh</th>
                            <th>Mã khoa</th>
                            <th>Học bổng</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $stt=0;
                        @endphp
                        @foreach ($nhsSinhViens as $item)
                            @php
                                    $stt++;
                            @endphp
                                    <tr>
                                        <th class="text-center">{{$stt}}</th>
                                        <td>{{$item->nhsMaSV}}</td>
                                        <td>{{$item->nhsHoSV}}</td>
                                        <td> {{$item->nhsTenSV}}</td>
                                        <td>{{$item->nhsPhai}}</td>
                                        <td>{{$item->nhsNgaySinh}}</td>
                                        <td>{{$item->nhsNoiSinh}}</td>
                                        <td>{{$item->nhsMaKH}}</td>
                                        <td class="text-right">{{$item->nhsHocBong}}</td>
                                        <td class="text-center">
                                            View / edit / delete
                                        </td>
                                    </tr>
                        @endforeach
                    </tbody>

                </table>

            </div>
            <div class="card-footer">
                <h3>Tổng số sinh viên: {{$nhsSinhViens->count()}}</h3>
                <a href="/nhs-sinhvien/create" class="btn btn-primary">Thêm mới</a>
            </div>
        </div>  
    </section>
</body>
</html>