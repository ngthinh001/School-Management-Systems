<?php include '../gv/gvcn.php' ?>
<br>
<div class="text-center">
    <div class="container">
        <h1><b>Danh sách điểm của học sinh</b></h1>
        <br><br>
    </div>
</div>
<div class="container text-center">
    <form action="diem.php" method="POST" style="float:center">
        <i class="bi bi-search"></i>
        Theo môn học: <input type="search" name="mon" value="<?php if(isset($_POST['mon']) && $_POST['mon']!= NULL) { echo $_POST['mon']; } ?>">
        <input type="submit" name="submit" value="Tìm kiếm" class="btn btn-outline-primary">
    </form>
</div>
<br><br>



<?php include '../gv/footer.php' ?>

<form>
    <?php
    if (isset($_POST['submit'])) {
        $mon = mysqli_real_escape_string($conn, $_POST['mon']);
        $sql = "SELECT distinct Hotenhs, diem FROM lop, hoc_sinh, lichday, monhoc, diem WHERE Ten_l like '%10A1%' AND Tenmh like '%$mon%'
        and lop.Mal = hoc_sinh.Mal and diem.Mamh = monhoc.Mamh and hoc_sinh.Mahs = diem.Mahs and lichday.Mamh = monhoc.Mamh ";

        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);
        $stt = 1;
        if ($count > 0) {
    ?>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Họ tên học sinh</th>
                            <th scope="col">Điểm số</th>
                            <th scope="col">Ghi Chú</th>
                        </tr>
                    </thead>
                    <?php
                    while ($row = mysqli_fetch_assoc($res)) {
                      
                    ?>

                        <tr>
                            <td><?php echo $stt++; ?>. </td>
                            <td><?php echo $row['Hotenhs'] ?>. </td>
                            <td><?php echo $row['diem'] ?>. </td>
                            <td><a href="#" class="btn btn-success">Cập nhật điểm</a></td>
                        </tr>
                    <?php
                    } ?>
                </table>
            </div>
    <?php }
    }
    ?>


</form>
