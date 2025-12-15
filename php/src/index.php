<?php
require('config.php');
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>จองห้องประชุม</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center mb-4">ระบบจองห้องประชุม</h1>

        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab">การจอง</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="calander-tab" data-bs-toggle="tab" data-bs-target="#calander" type="button" role="tab">ตารางการจอง</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab">การจองของฉัน</button>
            </li>
        </ul> 
        <div class="tab-content pt-4" id="myTabContent">

            <div class="tab-pane fade show active" id="home" role="tabpanel">
                <div class="alert alert-info">หน้าการจอง (ใส่เนื้อหาตรงนี้)</div>
            </div>

            <div class="tab-pane fade" id="calander" role="tabpanel">
                <div class="alert alert-info">หน้าตาราง (ใส่เนื้อหาตรงนี้)</div>
            </div>

            <div class="tab-pane fade" id="profile" role="tabpanel">
                
                <div class="card shadow-sm border-top-success">
                    <div class="card-header bg-light text-success fw-bold">
                        การจองของฉัน
                    </div>

                    <div class="card-body">
                        <div class="row mb-4 align-items-end"> 
                            <div class="col-md-6 d-flex gap-2 align-items-end">
                                <div class="w-50">
                                    <label for="bookingDate" class="form-label">เลือกวันที่</label>
                                    <input type="date" class="form-control" id="bookingDate" value="2025-12-12">
                                </div>
                                <button class="btn btn-success">ค้นหา</button>
                            </div>

                            <div class="col-md-6 text-end">
                                <button class="btn btn-outline-secondary">แสดงการจองล่าสุด</button>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered table-hover align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>ห้อง</th>
                                        <th>วันที่จอง</th>
                                        <th>เวลา</th>
                                        <th>สถานะ</th>
                                        <th>วันที่ทำรายการ</th>
                                        <th>การดำเนินการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="7" class="text-center text-info bg-light p-4">
                                            ไม่พบการจองในวันที่เลือก
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> </div> </div> </div> </div> </body>
</html>