<?php
// require('config.php'); // ปิดไว้ก่อนเพื่อให้รันหน้าเว็บทดสอบได้ (ถ้าใช้งานจริงให้เอา // ออก)
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>จองห้องประชุม RMUTL</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <style>
        /* 1. ใส่สีพื้นหลังให้ส่วนหัว (สำคัญมาก ไม่งั้นตัวหนังสือขาวจะมองไม่เห็น) */
        .bg--main {
            background-color: #184337; /* สีเขียวเข้มตามธีม */
            color: #fff;
            padding: 60px 0;
            margin-bottom: 30px;
        }

        /* 2. กำหนดสีให้ตัวหนังสือที่กำลังพิมพ์ */
        .color--primary {
            color: #ffc107; /* สีเหลืองทอง */
            font-weight: bold;
        }

        /* ปรับแต่ง Navbar */
        .navbar-brand i {
            color: #36594f;
        }
    </style>
</head>
<body>

<div class="container mt-4">
    <nav class="navbar navbar-expand-lg shadow-sm p-3 mb-5 bg-body rounded">
        <div class="container-fluid">
            <a class="navbar-brand" href="main.php">
                <i class="fa-solid fa-book-open" aria-hidden="true"></i>
                Meeting Room Booking
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown">
                            <i class="fa-solid fa-layer-group"></i>&nbsp; SERVICE
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="main.php?section=reserve-room">
                                    <i class="fa-solid fa-door-open text-success"></i>&nbsp; Reserve Room (จองห้อง)
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="main.php?section=interlibrary-loan">
                                    <i class="fa-solid fa-right-left text-success"></i>&nbsp; Interlibrary Loan (ยืมระหว่างห้องสมุด)
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="main.php?section=purchasing-resources">
                                    <i class="fa-solid fa-cart-shopping text-success"></i>&nbsp; Purchasing (เสนอซื้อ)
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="history.php">
                            <i class="fa-solid fa-user"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>&nbsp; LOGOUT
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<section class="bg--main text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h1 class="mb-2">Booking RMUTL</h1>
                    <h1>ระบบจองห้อง
                        <span class="typed-text color--primary"></span>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <h2 class="text-center mb-4">ระบบจองห้องประชุม</h2>

    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button">การจอง</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="calander-tab" data-bs-toggle="tab" data-bs-target="#calander" type="button">ตารางการจอง</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button">การจองของฉัน</button>
        </li>
    </ul> 

    <div class="tab-content pt-4" id="myTabContent">

        <div class="tab-pane fade show active" id="home" role="tabpanel">
            <div class="alert alert-info text-center">หน้าฟอร์มการจอง (ใส่เนื้อหาตรงนี้)</div>
        </div>

        <div class="tab-pane fade" id="calander" role="tabpanel">
            <div class="alert alert-info text-center">หน้าปฏิทิน (ใส่เนื้อหาตรงนี้)</div>
        </div>

        <div class="tab-pane fade" id="profile" role="tabpanel">
            <div class="card shadow-sm border-top border-success border-3">
                <div class="card-header bg-light text-success fw-bold">
                    การจองของฉัน
                </div>

                <div class="card-body">
                    <div class="row mb-4 align-items-end"> 
                        <div class="col-md-6 d-flex gap-2 align-items-end">
                            <div class="w-50">
                                <label for="bookingDate" class="form-label">เลือกวันที่</label>
                                <input type="date" class="form-control" id="bookingDate" value="<?php echo date('Y-m-d'); ?>">
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
                                    <td colspan="7" class="text-center text-muted bg-light p-4">
                                        <i class="fa-solid fa-inbox fa-2x mb-2"></i><br>
                                        ไม่พบการจองในวันที่เลือก
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> 
            </div> 
        </div> 
    </div> 
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var typed = new Typed('.typed-text', {
            // ข้อความที่จะให้พิมพ์วนไปมา
            strings: [
                "มหาวิทยาลัยเทคโนโลยีราชมงคลล้านนา", 
                "ห้องประชุมออนไลน์", 
                "ห้องสัมมนา"
            ],
            typeSpeed: 50,    // ความเร็วในการพิมพ์
            backSpeed: 30,    // ความเร็วในการลบ
            startDelay: 500,  // รอแป๊บหนึ่งก่อนเริ่มพิมพ์
            loop: true,       // วนลูปตลอด
            showCursor: true
        });
    });
</script>

</body>
</html>