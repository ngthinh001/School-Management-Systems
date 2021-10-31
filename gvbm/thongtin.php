<?php session_start(); ?>
<?php include '../gv/gvbm.php' ?>
<br>
<div class="text-center">
    <div class="container">
        <h1><b>Thông tin chi tiết của giáo viên</b></h1>
        <br><br>
    </div>
</div>
<?php
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $sql = "SELECT * from giao_vien, lichday, monhoc
        where giao_vien.Magv LIKE '%$id%' AND giao_vien.Magv = lichday.Magv and lichday.Mamh = monhoc.Mamh ";
    $res = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($res);
    if ($count > 0) {
        $row = mysqli_fetch_assoc($res);
    }
} else echo 'Not found';
?>
<center>
    <form action="../gvbm/thongtin.php" method="POST">
        <table>
            <tr class="spaceUnder">
                <td><i class="bi bi-person-circle"></i>&nbsp;&nbsp; Họ và tên:</td>
                <td> <input type="text" name="tengv" value="<?php echo $row['Hotengv']; ?>"></td>
            </tr>
            <tr class="spaceUnder">
                <td><i class="bi bi-telephone"></i>&nbsp;&nbsp; Số điện thoại:</td>
                <td><input type="text" name="sdt" value="<?php echo $row['Sdt']; ?>"></td>
            </tr>
            <tr class="spaceUnder">
                <td><i class="bi bi-calendar-week"></i>&nbsp;&nbsp;Ngày sinh: </td>
                <td> <input type="date" name="ngaysinh" value="<?php echo $row['Ngaysinh']; ?>"></td>
            </tr>
            <tr class="spaceUnder">
                <td><i class="bi bi-person-fill"></i>&nbsp;&nbsp;Giới Tính:</td>
                <td><input type="text" name="diachi" value="<?php echo $row['Gioitinh']; ?>"></td>
            </tr>
            <tr class="spaceUnder">
                <td><i class="bi bi-house"></i>&nbsp;&nbsp;Địa chỉ:</td>
                <td><input type="text" name="diachi" value="<?php echo $row['Diachi']; ?>"></td>
            </tr>
            <tr class="spaceUnder">
                <td><i class="bi bi-person-fill"></i>&nbsp;&nbsp;Chức vụ:</td>
                <td><input type="text" name="diachi" value="<?php echo $row['Chucvu']; ?>"></td>
            </tr>
            <tr class="spaceUnder">
                <td> <i class="bi bi-journal-minus"></i>&nbsp;&nbsp;Môn dạy:</td>
                <td><input type="text" name="mon" value=" <?php echo $row['Tenmh']; ?>"></td>
            </tr>

        </table>
        <br> <br>
        <div>
            <a href="#" class="btn btn-success">Cập nhật thông tin</a>
            <a href="#" class="btn btn-primary">Thay đổi mật khẩu</a>
        </div>
    </form>
</center>
<?php include '../gv/footer.php' ?>