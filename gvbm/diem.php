<?php session_start() ?>
<?php include '../gv/gvbm.php' ?>
<br>
<div class="text-center">
    <div class="container">
        <h1><b>Danh sách điểm của học sinh</b></h1>
        <br>
    </div>
</div>
<div class="container text-center">
    <form action="diem.php" method="POST" style="float:center">
        <i class="bi bi-search"></i>
        Theo lớp: <select name='lop'>
            <option>10A1</option>
            <option>11B1</option>
            <option>12C1</option>
        </select>
        <input type="submit" name="submit" value="Tìm kiếm" class="btn btn-outline-primary">
    </form>
</div>
<br>
<form>
    <?php
    if (isset($_POST['submit'])) {
            $lop = mysqli_real_escape_string($conn, $_POST['lop']);
            if (isset($_SESSION['id'])) {
                $id = $_SESSION['id'];
            $sql = "SELECT distinct Hotenhs, diem, Tenmh, Ten_l FROM lop, hoc_sinh, lichday, monhoc, diem WHERE Ten_l LIKE '%$lop%' AND lichday.Magv LIKE '%$id%'
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
                                <th scope="col">Lớp</th>
                                <th scope="col">Điểm số</th>
                                <th scope="col">Tên môn</th>
                                <th scope="col">Ghi Chú</th>
                            </tr>
                        </thead>
                        <?php
                        while ($row = mysqli_fetch_assoc($res)) {

                        ?>

                            <tr>
                                <td><?php echo $stt++; ?>. </td>
                                <td><?php echo $row['Hotenhs'] ?>. </td>
                                <td><?php echo $row['Ten_l'] ?>. </td>
                                <td><?php echo $row['diem'] ?>. </td>
                                <td><?php echo $row['Tenmh'] ?>. </td>
                                <td><a href="#" class="btn btn-success">Cập nhật điểm</a></td>
                            </tr>
                        <?php
                        } ?>
                    </table>
                </div>
    <?php }
        }
    }
    ?>


</form>

<br>

<?php include '../gv/footer.php' ?>