<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm mới sinh viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
       input{
        border-radius: 0 !important;
       }
    </style>
</head>
<body>
    <section class="container">
        <form action="{{ route('nhsSinhVien.nhsCreateSubmit') }}" method="post">
                @csrf
                <div class="card">
                    <div class="card header">
                        <h1>Thêm mới sinh viên</h1>
                    </div>
                    <div class="card-body">
                        <div class="mb-3 row">
                            <label for="nhsMaSV" class="col-sm-2 col-form-label">Mã sinh viên:</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nhsMaSV" name="nhsMaSV">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nhsHoSV" class="col-sm-2 col-form-label">Họ sinh viên:</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nhsHoSV" name="nhsHoSV">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nhsTenSV" class="col-sm-2 col-form-label">Tên sinh viên:</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nhsTenSV" name="nhsTenSV">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nhsPhai" class="col-sm-2 col-form-label">Giới Tính:</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nhsPhai" name="nhsPhai">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nhsNgaySinh" class="col-sm-2 col-form-label">Ngày Sinh:</label>
                            <div class="col-sm-10">
                            <input type="date" class="form-control" id="nhsNgaySinh" name="nhsNgaySinh">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nhsNoiSinh" class="col-sm-2 col-form-label">Nơi Sinh:</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nhsNoiSinh" name="nhsNoiSinh">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nhsMaKH" class="col-sm-2 col-form-label">Mã Khoa:</label>
                            <div class="col-sm-10">
                                <select name="nhsMaKH" id="nhsMaKH">
                                    <option value="">--Chọn khoa--</option>
                                    <option value="PR">Phong Ra</option>
                                    <option value="PL">Phong Long</option>
                                    <option value="PB">Phong Bang</option>
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary">Thêm mới</button>
                        <a href="/nhs-sinhviens" class="btn btn-secondary">Quay lại</a>
                    </div>
                </div>
        </form>
    </section>
    
</body>
</html>