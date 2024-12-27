<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NHS - Danh sách môn học</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <div class="card header">
            <h1>Danh sách môn học</h1>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã môn</th>
                        <th>Tên môn học</th>
                        <th>Số tiết</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($nhsMonHocs as $item)
                        <tr>
                            <td>1</td>
                            <td>{{$item->NHSMAMH}}</td>
                            <td>{{$item->NHSTENMH}}</td>
                            <td>{{$item->NHSSOTIET}}</td>
                            <td>
                                view/ edit / delete
                            </td>
                        </tr>
                    @endforeach

                </tbody>\
                <tfoot>
                    <tr>
                        <th colspan="5">
                            <h3>Tổng số môn học: {{$nhsMonHocs->count()}}</h3>
                        </th>
                    </tr>
                </tfoot>

            </table>

        </div>
    </section>

</body>
</html>