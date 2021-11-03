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
        <tr>
            <td><i class="bi bi-search"></i>Theo môn học: </td>
            <td>
                <select name="mon">
                    <?php
                    $sql1 = "SELECT * FROM monhoc";
                    $result1 = mysqli_query($conn, $sql1);
                    if (mysqli_num_rows($result1)) {
                        while ($row = mysqli_fetch_assoc($result1)) {
                            echo '<option>' . $row['Tenmh'] . '</option>';
                        }
                    }
                    ?>
                </select>
            </td>
            <td><input type="submit" name="submit" value="Tìm kiếm" class="btn btn-outline-primary"></td>
        </tr>
    </form>
</div>
<br><br>

<?php include '../gv/footer.php' ?>

<form style="padding: 0 20%">
    <?php
    if (isset($_POST['submit'])) {
        $id = $_SESSION['id'];
        $mon = mysqli_real_escape_string($conn, $_POST['mon']);
        echo "Tên môn học:  $mon";
        //Lấy tên lớp mà giáo viên đang chủ nhiệm
        $s = "SELECT * FROM lop, giao_vien WHERE giao_vien.Magv like '%$id%' and lop.Magv = giao_vien.Magv";
        $s1 = mysqli_query($conn, $s);
        $u = mysqli_fetch_assoc($s1);
        $tenl = $u['Ten_l'];

        //lấy tên học sinh và điểm của sinh viên trong lớp
        $sql = "SELECT Hotenhs, diem FROM lop, hoc_sinh, monhoc, diem WHERE Ten_l like '%$tenl%' AND Tenmh like '%$mon%'
        and lop.Mal = hoc_sinh.Mal and diem.Mamh = monhoc.Mamh and hoc_sinh.Mahs = diem.Mahs ";

        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);
        $stt = 1;
        if ($count > 0) {
    ?>
            <div class="table-responsive">
                <table class="table table-striped table-hover" id="tbdiem">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Họ tên học sinh</th>
                            <th scope="col">Điểm số</th>
                        </tr>
                    </thead>
                    <?php
                    while ($row = mysqli_fetch_assoc($res)) {

                    ?>

                        <tr>
                            <td><?php echo $stt++; ?> </td>
                            <td><?php echo $row['Hotenhs'] ?> </td>
                            <td><?php echo $row['diem'] ?> </td>
                        </tr>
                    <?php
                    } ?>
                </table>
            </div>
            <br>
            <form id="upload_csv" method="post" enctype="multipart/form-data">
                <div class="col-md-4" style="float: left;">
                    <input type="file" name="diem" id="diemcalop" style="margin-top:15px;" />
                </div>
                <div class="col-md-5" style="float: left;">
                    <input type="submit" name="capnhatdiem" id="upload" value="Cập nhật Điểm" style="margin-top:10px;" class="btn btn-success" />
                </div>
            </form>
            <br>
    <?php }
    }
    ?>
</form>

<script>
    $(document).ready(function() {
        $('#upload_csv').on("submit", function(e) {
            e.preventDefault(); //form will not submitted  
            $.ajax({
                url: "update/import_diem.php",
                method: "POST",
                data: new FormData(this),
                contentType: false, // The content type used when sending data to the server.  
                cache: false, // To unable request pages to be cached  
                processData: false, // To send DOMDocument or non processed data file it is set to false  
                uccess: function(data){  
                          if(data=='Error1')  
                          {  
                               alert("Invalid File");  
                          }  
                          else if(data == "Error2")  
                          {  
                               alert("Please Select File");  
                          }  
                          else  
                          {  
                               $('tbdiem').html(data);  
                          }  
                     }  
                })  
           });  
      });  
</script>