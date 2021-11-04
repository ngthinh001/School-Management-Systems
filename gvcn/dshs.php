<?php include '../partial-font/header_gvcn.php' ?>
<br>
<div class="text-center">
    <div class="container">
        <h1><b>Danh sách học sinh trong lớp</b></h1>
        <br><br>
    </div>
</div>
<br><br>
<div class="table-responsive" style="padding: 0 5%" id="hs_table">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Mã học sinh</th>
                <th scope="col">Họ tên học sinh</th>
                <th scope="col">Giới tính</th>
                <th scope="col">Ngày sinh</th>
                <th scope="col">Mã lớp</th>
                <th scope="col">SĐT Phụ huynh</th>
                <th scope="col">Học kì</th>
                <th scope="col">Năm học</th>
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
                        <td><?php echo $row['Gioitinh']; ?></td>
                        <td><?php echo $row['Ngaysinh']; ?></td>
                        <td><?php echo $row['Mal']; ?></td>
                        <td><?php echo $row['Sdtph']; ?></td>
                        <td><?php echo $row['Hocky']; ?></td>
                        <td><?php echo $row['Namhoc']; ?></td>
                    </tr>
        <?php
                }
            }
        } ?>
    </table>
    <br>
</div>
<form id="upload_ds" method="post" enctype="multipart/form-data" style="padding: 0 5%">
    <div class="col-md-4" style="float: left;">
        <input type="file" name="book1" style="margin-top:15px;" />
    </div>
    <div class="col-md-5" style="float: left;">
        <input type="submit" name="upload" id="upload" value="Upload" style="margin-top:10px;" class="btn btn-info" />
    </div>
    <div style="clear:both"></div>
</form>
<?php include '../partial-font/footer_gv.php' ?>

<script>
    $(document).ready(function() {
        $('#upload_ds').on("submit", function(e) {
            e.preventDefault(); //form will not submitted  
            $.ajax({
                url: "../actions/import_dshs.php",
                method: "POST",
                data: new FormData(this),
                contentType: false, // The content type used when sending data to the server.  
                cache: false, // To unable request pages to be cached  
                processData: false, // To send DOMDocument or non processed data file it is set to false  
                success: function(data) {
                    if (data == 'Error1') {
                        alert("Invalid File");
                    } else if (data == "Error2") {
                        alert("Please Select File");
                    } else {
                        $('#hs_table').html(data);
                    }
                }
            })
        });
    });
</script>