<?php include '../partial-font/header_gvbm.php' ?>
<br>
<div class="text-center">
    <div class="container">
        <h1><b>Lịch giảng dạy</b></h1>
        <br><br>
    </div>
</div>
<br><br>
<form style="padding: 0 10%">
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>

                    <th scope="col">Tiết/Thứ</th>
                    <th scope="col">Thứ 2</th>
                    <th scope="col">Thứ 3</th>
                    <th scope="col">Thứ 4</th>
                    <th scope="col">Thứ 5</th>
                    <th scope="col">Thứ 6</th>
                    <th scope="col">Thứ 7</th>
                </tr>
            </thead>
            <?php
            if (isset($_SESSION['id'])) {
                $id = $_SESSION['id'];
                $stt = 1;

            ?>
                <?php for ($i = 1; $i <= 3; $i++) { ?>
                    <tr>
                        <th><?php echo $stt++ ?></th>
                        <td><?php
                            $sql = "SELECT * FROM lichday, lop WHERE lichday.Magv LIKE '%$id%' AND Ngay LIKE '2021-11-01' AND Tiet LIKE 'Tiết 1,2,3' AND lichday.Mal = lop.Mal";
                            $res = mysqli_query($conn, $sql);
                            $count = mysqli_num_rows($res);
                            if ($count > 0) {
                                while ($row = mysqli_fetch_assoc($res)) {
                                    echo $row['Ten_l'];
                                }
                            }
                            ?> </td>
                        <td> <?php
                                $id = $_SESSION['id'];
                                $sql = "SELECT * FROM lichday, lop WHERE lichday.Magv LIKE '%$id%' AND Ngay LIKE '2021-11-02' AND Tiet LIKE 'Tiết 1,2,3' AND lichday.Mal = lop.Mal";
                                $res = mysqli_query($conn, $sql);
                                $count = mysqli_num_rows($res);
                                if ($count > 0) {
                                    while ($row = mysqli_fetch_assoc($res)) {
                                        echo $row['Ten_l'];
                                    }
                                }
                                ?> </td>
                        <td> <?php
                                $id = $_SESSION['id'];
                                $sql = "SELECT * FROM lichday, lop WHERE lichday.Magv LIKE '%$id%' AND Ngay LIKE '2021-11-03'  AND Tiet LIKE 'Tiết 1,2,3'  AND lichday.Mal = lop.Mal";
                                $res = mysqli_query($conn, $sql);
                                $count = mysqli_num_rows($res);
                                if ($count > 0) {
                                    while ($row = mysqli_fetch_assoc($res)) {
                                        echo $row['Ten_l'];
                                    }
                                }
                                ?> </td>
                        <td> <?php
                                $id = $_SESSION['id'];
                                $sql = "SELECT * FROM lichday, lop WHERE lichday.Magv LIKE '%$id%' AND Ngay LIKE '2021-11-04' AND Tiet LIKE 'Tiết 1,2,3'  AND lichday.Mal = lop.Mal";
                                $res = mysqli_query($conn, $sql);
                                $count = mysqli_num_rows($res);
                                if ($count > 0) {
                                    while ($row = mysqli_fetch_assoc($res)) {
                                        echo $row['Ten_l'];
                                    }
                                }
                                ?> </td>
                        <td> <?php
                                $id = $_SESSION['id'];
                                $sql = "SELECT * FROM lichday, lop WHERE lichday.Magv LIKE '%$id%' AND Ngay LIKE '2021-11-05' AND Tiet LIKE 'Tiết 1,2,3'  AND lichday.Mal = lop.Mal";
                                $res = mysqli_query($conn, $sql);
                                $count = mysqli_num_rows($res);
                                if ($count > 0) {
                                    while ($row = mysqli_fetch_assoc($res)) {
                                        echo $row['Ten_l'];
                                    }
                                }
                                ?> </td>
                        <td> <?php
                                $id = $_SESSION['id'];
                                $sql = "SELECT * FROM lichday, lop WHERE lichday.Magv LIKE '%$id%' AND Ngay LIKE '2021-11-06' AND Tiet LIKE 'Tiết 1,2,3'  AND lichday.Mal = lop.Mal";
                                $res = mysqli_query($conn, $sql);
                                $count = mysqli_num_rows($res);
                                if ($count > 0) {
                                    while ($row = mysqli_fetch_assoc($res)) {
                                        echo $row['Ten_l'];
                                    }
                                }
                                ?> </td>

                    </tr> <?php }
                        for ($i = 1; $i <= 3; $i++) { ?>
                    <tr>
                        <th><?php echo $stt++ ?></th>
                        <td><?php
                            $sql = "SELECT * FROM lichday, lop WHERE lichday.Magv LIKE '%$id%' AND Ngay LIKE '2021-11-01' AND Tiet LIKE 'Tiết 4,5,6' AND lichday.Mal = lop.Mal";
                            $res = mysqli_query($conn, $sql);
                            $count = mysqli_num_rows($res);
                            if ($count > 0) {
                                while ($row = mysqli_fetch_assoc($res)) {
                                    echo $row['Ten_l'];
                                }
                            }
                            ?> </td>
                        <td> <?php
                                $id = $_SESSION['id'];
                                $sql = "SELECT * FROM lichday, lop WHERE lichday.Magv LIKE '%$id%' AND Ngay LIKE '2021-11-02' AND Tiet LIKE 'Tiết 4,5,6' AND lichday.Mal = lop.Mal";
                                $res = mysqli_query($conn, $sql);
                                $count = mysqli_num_rows($res);
                                if ($count > 0) {
                                    while ($row = mysqli_fetch_assoc($res)) {
                                        echo $row['Ten_l'];
                                    }
                                }
                                ?> </td>
                        <td> <?php
                                $id = $_SESSION['id'];
                                $sql = "SELECT * FROM lichday, lop WHERE lichday.Magv LIKE '%$id%' AND Ngay LIKE '2021-11-03'  AND Tiet LIKE 'Tiết 4,5,6'  AND lichday.Mal = lop.Mal";
                                $res = mysqli_query($conn, $sql);
                                $count = mysqli_num_rows($res);
                                if ($count > 0) {
                                    while ($row = mysqli_fetch_assoc($res)) {
                                        echo $row['Ten_l'];
                                    }
                                }
                                ?> </td>
                        <td> <?php
                                $id = $_SESSION['id'];
                                $sql = "SELECT * FROM lichday, lop WHERE lichday.Magv LIKE '%$id%' AND Ngay LIKE '2021-11-04' AND Tiet LIKE 'Tiết 4,5,6'  AND lichday.Mal = lop.Mal";
                                $res = mysqli_query($conn, $sql);
                                $count = mysqli_num_rows($res);
                                if ($count > 0) {
                                    while ($row = mysqli_fetch_assoc($res)) {
                                        echo $row['Ten_l'];
                                    }
                                }
                                ?> </td>
                        <td> <?php
                                $id = $_SESSION['id'];
                                $sql = "SELECT * FROM lichday, lop WHERE lichday.Magv LIKE '%$id%' AND Ngay LIKE '2021-11-05' AND Tiet LIKE 'Tiết 4,5,6'  AND lichday.Mal = lop.Mal";
                                $res = mysqli_query($conn, $sql);
                                $count = mysqli_num_rows($res);
                                if ($count > 0) {
                                    while ($row = mysqli_fetch_assoc($res)) {
                                        echo $row['Ten_l'];
                                    }
                                }
                                ?> </td>
                        <td> <?php
                                $id = $_SESSION['id'];
                                $sql = "SELECT * FROM lichday, lop WHERE lichday.Magv LIKE '%$id%' AND Ngay LIKE '2021-11-06' AND Tiet LIKE 'Tiết 4,5,6'  AND lichday.Mal = lop.Mal";
                                $res = mysqli_query($conn, $sql);
                                $count = mysqli_num_rows($res);
                                if ($count > 0) {
                                    while ($row = mysqli_fetch_assoc($res)) {
                                        echo $row['Ten_l'];
                                    }
                                }
                                ?> </td>

                    </tr>

            <?php }
                    }
            ?>


        </table>
    </div>
</form>
<br>

<br>

<?php include '../partial-font/footer_gv.php' ?>