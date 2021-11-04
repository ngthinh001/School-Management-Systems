<?php include '../partial-font/header_gvbm.php' ?>
<br>
<div class="text-center">
    <div class="container">
        <h1><b>Danh sách điểm của học sinh</b></h1>
        <br>
    </div>
</div>
<br>
<div class="container text-center">
    <form action="diem.php" method="POST" style="float:center">
        <tr>
            <td><i class="bi bi-search"></i>Theo lớp: </td>
            <td>
                <select name="lop">
                    <?php
                    $sql1 = "SELECT * FROM lop";
                    $result1 = mysqli_query($conn, $sql1);
                    if (mysqli_num_rows($result1)) {
                        while ($row = mysqli_fetch_assoc($result1)) {
                            echo '<option>' . $row['Ten_l'] . '</option>';
                        }
                    }
                    ?>
                </select>
            </td>
            <td><input type="submit" name="submit" value="Tìm kiếm" class="btn btn-outline-primary"></td>
        </tr>
    </form>
</div>
<br>
<form style="padding: 0 20%">
    <?php
    if (isset($_POST['submit'])) {
        $lop =  $_POST['lop'];
        if (isset($_SESSION['id'])) {
            $id = $_SESSION['id'];
            $sql = "SELECT distinct Hotenhs, diem, Tenmh, Ten_l FROM lop, hoc_sinh, lichday, monhoc, diem WHERE Ten_l LIKE '%$lop%' AND lichday.Magv LIKE '%$id%'
            and lop.Mal = hoc_sinh.Mal and diem.Mamh = monhoc.Mamh and hoc_sinh.Mahs = diem.Mahs and lichday.Mamh = monhoc.Mamh  ";

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
                                <td></td>
                            </tr>
                        <?php
                        } ?>
                    </table>
                </div>
                <br>
    <?php }
        }
    }
    ?>
</form>

<br>

<?php include '../partial-font/footer_gv.php' ?>