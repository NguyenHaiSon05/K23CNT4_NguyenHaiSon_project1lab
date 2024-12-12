<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NHS - Danh sách khoa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container border my-3">
        <h1>Danh sách khoa</h1>
        <table class="table-bord-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã khoa</th>
                    <th>Tên khoa</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
             <tbody>
                @php
                   $stt=0;
                @endphp
                @foreach ($nhsKhoas as $item)
                  @php
                     $stt++;
                  @endphp
                <tr>
                    <td>{{$stt}}</td>
                    <td>{{$item->NHSMAKH}}</td>
                    <td>{{$item->NHSTENKH}}</td>
                    <td>
                        <a href="/khoas/detail/{{$item->NHSMAKH}}" class ="btn btn-success">
                            Chi tiết</a>
                        <a href="/khoas/edit/{{$item->NHSMAKH}}" class ="btn btn-primary">
                            Sửa</a>

                        delete
                    </td>
                </tr>
                @endforeach
                
             </tbody>
        </table>

    </section>
</body>
</html>