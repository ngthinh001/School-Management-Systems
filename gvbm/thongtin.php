<?php include '../gv/gvbm.php' ?>
<br>
<div class="text-center">
    <div class="container">
        <h1><b>Thông tin chi tiết của giáo viên</b></h1>
        <br><br>
    </div>
</div>
<div class="mid">
    <table>
        <tr class="spaceUnder">
            <td><i class="bi bi-person-circle"></i> Họ và tên:</td>
            <td> <input type="text" name="tengv"></td>
        </tr>
        <tr class="spaceUnder">
            <td><i class="bi bi-telephone"></i> Số điện thoại:</td>
            <td><input type="text" name="sdt"></td>
        </tr>
        <tr class="spaceUnder">
            <td><i class="bi bi-calendar-week"></i>Ngày sinh: </td>
            <td> <input type="date" name="ngaysinh"></td>
        </tr>
        <tr class="spaceUnder">
            <td><i class="bi bi-house"></i>Địa chỉ:</td>
            <td><input type="text" name="diachi"></td>
        </tr>

    </table>
    <br> <br>
    <div>
        <a href="#" class="btn btn-success">Cập nhật thông tin</a>
        <a href="#" class="btn btn-primary">Thay đổi mật khẩu</a>
    </div>

</div>
<?php include '../gv/footer.php' ?>