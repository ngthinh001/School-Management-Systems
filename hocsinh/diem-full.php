<?php include('../partial-font/hearder_hs.php') ?>
<br>
<main>
<div class="container">
        <h2>Danh sách điểm môn học của học sinh lớp </h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Mã học sinh</th>
                        <th scope="col">Tên học sinh</th>
                        <th scope="col">Mã môn học</th>
                        <th scope="col">Tên môn học</th> 
                    
                        <th scope="col">Điểm</th>
                        <th scope="col">Học kì</th>
                        <th scope="col">Năm học</th>
                   
                    </tr>
                </thead>
                <?php 
                     //kết nối với mysql
                    include('../sql/connect.php');
                    $name = $_SESSION['username'];
                    $pas = $_SESSION['password'];
                    $id = $_SESSION['id'];
                    //lấy ra mã lớp của sinh viên
                    $s = "SELECT Mal FROM hoc_sinh WHERE Mahs LIKE '%$id%'";
                    $re =  mysqli_query($conn, $s);
                    $u = mysqli_fetch_assoc($re);
                    $malop = $u['Mal'];
                    echo $malop;

                    $sql = "SELECT * FROM diem, monhoc, hoc_sinh WHERE Mal LIKE '%$malop%' and diem.Mamh= monhoc.Mamh AND diem.Mahs=hoc_sinh.Mahs";
                    $result = mysqli_query($conn, $sql);
                    
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){ 
                            
                 ?>
                                <tr>
                                    <td><?php echo $row['Mahs']; ?></td>
                                    <td><?php echo $row['Hotenhs']; ?></td>
                                    <td><?php echo $row['Mamh']; ?></td>
                                    <td><?php echo $row['Tenmh']; ?></td>
                                    
                                    <td><?php echo $row['Diem']; ?></td>
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
    <a href="tra_cuu_diem.php" class="btn btn-primary "><i class="bi bi-reply-all-fill"></i>Quay lại</a>
</main>
<br>
<?php include('..//partial-font/footer_hs.php') ?>