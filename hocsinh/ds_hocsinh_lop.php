<?php include('../partial-font/hearder_hs.php'); ?>
<br>
<main>
    <div class="container">
        <h2>Danh sách học sinh trong lớp </h2><br><br><br>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Mã học sinh</th>
                    <th scope="col">Họ tên</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Ngày sinh</th>
                    <th scope="col">Mã lớp</th>
                    <th scope="col">Học kì</th>
                    <th scope="col">Năm học</th>
                   
                    </tr>
                </thead>
                <?php 
                     //kết nối với mysql
                    include('../sql/connect.php');
                    
                    $id = $_SESSION['id'];
                    //lấy ra mã lớp của sinh viên
                    $s = "SELECT Mal FROM hoc_sinh WHERE Mahs LIKE '%$id%'";
                    $re =  mysqli_query($conn, $s);
                    $u = mysqli_fetch_assoc($re);
                    $malop = $u['Mal'];
                    
                    //lấy ra thông tin của học sinh có mal= $malps
                    $sql = "SELECT * FROM hoc_sinh WHERE Mal LIKE '%$malop%'";
                    $result = mysqli_query($conn, $sql);
                    
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){ 
                            
                 ?>
                                <tr>
                                    <td ><?php echo $row['Mahs']; ?></td>
                                    <td><?php echo $row['Hotenhs']; ?></td>
                                    <td><?php echo $row['Gioitinh']; ?></td>
                                    <td><?php echo $row['Ngaysinh']; ?></td>
                                    <td><?php echo $row['Mal']; ?></td>
                                    <td><?php echo $row['Hocky']; ?></td>
                                    <td><?php echo $row['Namhoc']; ?></td>
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
<?php include('../partial-font/footer_hs.php');
