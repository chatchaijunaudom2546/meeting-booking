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
        <nav class="navbar navbar-expand-lg shadow-sm p-3 mb-5 bg-body rounded">
  <div class="container-fluid">
    <!-- ด้านซ้ายสุด -->
    <a class="navbar-brand" href="main.php">
      <i class="fa-duotone fa-books" style="--fa-primary-color: #36594f; --fa-secondary-color: #4c9493;" aria-hidden="true"></i>
      Meeting room boking
    </a>
    
    <!-- ปุ่ม toggle สำหรับหน้าจอขนาดเล็ก -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <!-- เมนูด้านขวา -->
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <!-- Dropdown เมนู Service -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-duotone fa-solid fa-layer-group" style="--fa-primary-color: #4c9493; --fa-secondary-color: #184337;" aria-hidden="true"></i>&nbsp; SERVICE
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        
                            <li>
                  <a class="dropdown-item" href="main.php?section=reserve-room">
                    <i class="fa-duotone fa-door-open" style="--fa-primary-color: #36594f; --fa-secondary-color: #4c9493;" aria-hidden="true"></i>&nbsp; 
                    Reserve Room (ระบบจองห้องเรียนและห้องประชุม)
                  </a>
                </li>
                            <li>
                  <a class="dropdown-item" href="main.php?section=interlibrary-loan">
                    <i class="fa-duotone fa-arrow-right-arrow-left" style="--fa-primary-color: #36594f; --fa-secondary-color: #4c9493;" aria-hidden="true"></i>&nbsp; 
                    Interlibrary Loan (ระบบยืมระหว่างห้องสมุด)
                  </a>
                </li>
                            <li>
                  <a class="dropdown-item" href="main.php?section=purchasing-resources">
                    <i class="fa-duotone fa-cart-shopping" style="--fa-primary-color: #36594f; --fa-secondary-color: #4c9493;" aria-hidden="true"></i>&nbsp; 
                    Purchasing Resources (ระบบเสนอซื้อทรัพยากร)
                  </a>
                </li>
                        
            
          </ul>
        </li>
        <!-- Profile -->
        <li class="nav-item">
          <a class="nav-link" href="history.php">
            <i class="fa-duotone fa-user" style="--fa-primary-color: #36594f; --fa-secondary-color: #4c9493; font-size: 16px;" aria-hidden="true"></i>&nbsp; 
</a>
        </li>
        <!-- Logout -->
        <li class="nav-item">
          <a class="nav-link" href="logout.php">
            <i class="fa-duotone fa-arrow-right-from-bracket" style="--fa-primary-color: #296b57; --fa-secondary-color: #184337; font-size: 16px;" aria-hidden="true"></i>&nbsp; LOGOUT
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <section class="bg--main text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="hidden-xs hidden-sm">
                    <h1 style="color: #fff;padding-top: 40px;">Booking RMUTL </h1>
                    <h1 style="color: #fff;padding-bottom: 40px;">ระบบจองห้อง
                        <span class="inline-block typed-text typed-text--cursor color--primary" data-typed-strings="มหาวิทยาลัยเทคโนโลยีราชมงคลล้านนา">มหา</span>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>

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
                                            hello 
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> </div> </div> </div> </div> </body>
</html>