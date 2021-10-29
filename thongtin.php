<?php include 'gv/gvcn.php' ?>
<br>
<div class="text-center">
    <div class="container">
        <h1><b>Thông tin chi tiết của giáo viên</b></h1>
        <br><br>
    </div>
</div>
<div>
    <a>
        <i class="bi bi-person-circle"></i>
        Họ và tên:
        <input type="text" name="tengv">
    </a><br><br>
    <a>
        <i class="bi bi-telephone"></i>
        Số điện thoại:
        <input type="number" name="sdt">
    </a><br><br>
    <a>
        <i class="bi bi-calendar-week"></i>
        Ngày sinh:
        <input type="date" name="ngaysinh">
    </a><br><br>
    <a>
        <i class="bi bi-house"></i>
        Địa chỉ:
        <input type="text" name="diachi">
    </a><br><br>
    <a>
        <i class="bi bi-easel2"></i>
        Lớp chủ nhiệm:
        <input type="text" name="tenlop">
    </a><br>
    <br> <br>
    <div>
    <a href="#" class="btn btn-success">Cập nhật thông tin</a>
    <a href="#" class="btn btn-primary">Thay đổi mật khẩu</a>
    </div>

</div>
<?php include 'gv/footer.php' ?>