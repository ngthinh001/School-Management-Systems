<?php include '../partial-font/header_gvbm.php' ?>
<br>
<div class="text-center">
    <div class="container">
        <h1><b>Cập nhật thông tin của giáo viên</b></h1>
    </div>
</div> <br>
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
<br>
<center>
    <form action="process-updategv.php" method="POST">
        <table>
            <tr class="spaceUnder">
                <td><i class="bi bi-person-circle"></i>&nbsp;&nbsp; Mã giáo viên:</td>
                <td> <input type="text" name="magv" id ="magv" value="<?php echo $row['Magv']; ?>"></td>
            </tr>
            <tr class="spaceUnder">
                <td><i class="bi bi-person-circle"></i>&nbsp;&nbsp; Họ và tên:</td>
                <td> <input type="text" name="tengv" id ="tengv" value="<?php echo $row['Hotengv']; ?>"></td>
            </tr>
            <tr class="spaceUnder">
                <td><i class="bi bi-telephone"></i>&nbsp;&nbsp; Số điện thoại:</td>
                <td><input type="text" name="sdt" id="sdt" value="<?php echo $row['Sdt']; ?>"></td>
            </tr>
            <tr class="spaceUnder">
                <td><i class="bi bi-calendar-week"></i>&nbsp;&nbsp;Ngày sinh: </td>
                <td> <input type="date" name="ngaysinh"  id="ngaysinh" value="<?php echo $row['Ngaysinh']; ?>"></td>
            </tr>
            <tr class="spaceUnder">
                <td><i class="bi bi-person-fill"></i>&nbsp;&nbsp;Giới Tính:</td>
                <td><input type="text" name="gioitinh" id="gioitinh" value="<?php echo $row['Gioitinh']; ?>"></td>
            </tr>
            <tr class="spaceUnder">
                <td><i class="bi bi-house"></i>&nbsp;&nbsp;Địa chỉ:</td>
                <td><input type="text" name="diachi" id="diachi" value="<?php echo $row['Diachi']; ?>"></td>
            </tr>
            <tr class="spaceUnder">
                <td><i class="bi bi-person-fill"></i>&nbsp;&nbsp;Chức vụ:</td>
                <td><input type="text" name="chucvu" id="chucvu" value="<?php echo $row['Chucvu']; ?>"></td>
            </tr>
            <tr class="spaceUnder">
                <td> <i class="bi bi-journal-minus"></i>&nbsp;&nbsp;Môn dạy:</td>
                <td><input type="text" name="mon" id="mon" value=" <?php echo $row['Tenmh']; ?>"></td>
            </tr>

        </table>
        <br> 
        
            <button type="submit" class="btn btn-primary">Submit</button>
        
    </form>
</center>
<?php include '../partial-font/footer_gv.php' ?>