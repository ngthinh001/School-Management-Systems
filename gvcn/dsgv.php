<?php include '../partial-font/header_gvcn.php' ?>
<br>
<div class="text-center">
    <div class="container">
        <h1><b>Danh sách giáo viên dạy lớp</b></h1>
        <br><br>
    </div>
</div>
<div class="table-responsive" style="padding: 0 5%">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên giáo viên</th>
                <th scope="col">Giới tính</th>
                <th scope="col">Ngày sinh</th>
                <th scope="col">Địa Chỉ</th>
                <th scope="col">Môn học</th>
            </tr>
        </thead>

        <?php
        if (isset($_SESSION['id'])) {
            $id = $_SESSION['id'];
            $sql = "SELECT * FROM lop WHERE Magv LIKE '%$id%'";
            $res = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($res);
            $stt = 1;
            if ($count > 0) {
                $user = mysqli_fetch_assoc($res);
                $lop = $user['Ten_l'];
                $sql1 = "SELECT * FROM lichday, giao_vien, lop, monhoc WHERE Ten_l LIKE '%$lop%' AND lichday.Mal = lop.Mal 
                    and lichday.Magv = giao_vien.Magv and lichday.Mamh = monhoc.Mamh";
                $res1 = mysqli_query($conn, $sql1);
                $count1 = mysqli_num_rows($res1);
                if ($count1 > 0) {
                    while ($row = mysqli_fetch_assoc($res1)) {
        ?>
                        <tr>
                            <th><?php echo $stt++; ?></th>
                            <td><?php echo $row['Hotengv']; ?></td>
                            <td><?php echo $row['Gioitinh']; ?></td>
                            <td><?php echo $row['Ngaysinh']; ?></td>
                            <td><?php echo $row['Diachi']; ?></td>
                            <td><?php echo $row['Tenmh'] ?></td>
                        </tr>
        <?php
                    }
                }
            }
        } ?>
    </table>
    <br>
</div>
<?php include '../partial-font/footer_gv.php' ?>