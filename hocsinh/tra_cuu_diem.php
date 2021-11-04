<?php include('../partial-font/hearder_hs.php') ?>
<br>
<main>
<div class="container">
        <h2>Danh sách điểm môn học </h2><br><br><br>
            <table class="table">
                <thead>
                    <tr>
        
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
                    $id = $_SESSION['id'];


                    $sql = "SELECT * FROM diem, monhoc WHERE Mahs LIKE '%$id%' and diem.Mamh= monhoc.Mamh";
                    $result = mysqli_query($conn, $sql);
                    
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){ 
                            
                 ?>
                                <tr>
                                    
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
    <a href="diem-full.php" class="btn btn-primary "><i class="bi bi-search"></i> Xem thêm</a>
</main>
<br><br><br>
<?php include('../partial-font/footer_hs.php') ?>
