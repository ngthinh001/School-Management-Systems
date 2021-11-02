<?php include '../gv/gvcn.php' ?>
<br>
<div class="text-center">
    <div class="container">
        <h1><b>Danh sách học sinh trong lớp</b></h1>
        <br><br>
    </div>
</div>
<br><br>
<div class="table-responsive" style="padding: 0 20%">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Mã học sinh</th>
                <th scope="col">Họ tên học sinh</th>
            </tr>
        </thead>
        <?php
        if (isset($_SESSION['id'])) {
            $id = $_SESSION['id'];
            $sql = "SELECT * FROM hoc_sinh, lop WHERE Magv LIKE '%$id%' AND hoc_sinh.Mal = lop.Mal";
            $res = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($res);
            $stt = 1;
            if ($count > 0) {
                while ($row = mysqli_fetch_assoc($res)) {
        ?>
                    <tr>
                        <th><?php echo $stt++; ?></th>
                        <td><?php echo $row['Mahs']; ?></td>
                        <td><?php echo $row['Hotenhs'] ?></td>
                    </tr>
        <?php
                }
            }
        } ?>
    </table>
    <br>
    <div class="col-md-4" style="float: left;">
                <input type="file" name="employee_file" style="margin-top:15px;" />
            </div>
            <div class="col-md-5" style="float: left;">
                <input type="submit" name="capnhatdshs" id="upload" value="Cập nhật Danh sách" style="margin-top:10px;" class="btn btn-success" />
            </div>
</div>

<?php include '../gv/footer.php' ?>