<?php include('../partial-font/hearder_hs.php'); ?>
<br>
<main>
    <div class="container">
        <h2>Danh sách giáo viên dạy lớp </h2><br><br><br>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Mã giáo viên</th>
                    <th scope="col">Họ tên</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Ngày sinh</th>
                    <th scope="col">Địa Chỉ</th>
                    <th scope="col">Dạy môn</th>
                    
                   
                    </tr>
                </thead>
                <?php 
                     //kết nối với mysql
                    include('../sql/connect.php');
                    $ten = $_SESSION['username'] ;
                    $id = $_SESSION['id'];

                    //lấy ra mã lớp của sinh viên
                    $s = "SELECT Mal FROM hoc_sinh WHERE Mahs LIKE '%$id%'";
                    $re =  mysqli_query($conn, $s);
                    $u = mysqli_fetch_assoc($re);
                    $malop = $u['Mal'];

                    $sql = "SELECT * FROM giao_vien, monhoc, lichday WHERE Mal LIKE '%$malop%' AND giao_vien.Magv = lichday.Magv AND monhoc.Mamh=lichday.Mamh ";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            ?>
                                <tr>
                                    <td ><?php echo $row['Magv']; ?></td>
                                    <td><?php echo $row['Hotengv']; ?></td>
                                    <td><?php echo $row['Gioitinh']; ?></td>
                                    <td><?php echo $row['Ngaysinh']; ?></td>
                                    <td><?php echo $row['Diachi']; ?></td>
                                    <td><?php echo $row['Tenmh']; ?></td>
                                   
                                </tr>  
                <?php    
                    }
                }
                ?>
               
            </table>
            <?php
            //Bước 4: Đóng kết nối
             mysqli_close($conn);
             ?>
    </div>
</main>
<br>
<?php include('../partial-font/footer_hs.php');?>