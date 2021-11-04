<?php include('../partial-font/hearder_hs.php') ?>
<br>
<main>
<div class="container">
        <h2>Lịch thi</h2><br><br><br>
            <table class="table">
                <thead>
                    <tr>
        
                    <th scope="col">Mã môn học</th>
                    <th scope="col">Tên môn học</th> 
                    <th scope="col">Số báo danh</th>
                    <th scope="col">Ngày thi</th>
                    <th scope="col">Phòng thi</th>
                    <th scope="col">Giờ thi</th>
                   
                    </tr>
                </thead>
                <?php 
                     //kết nối với mysql
                    include('../sql/connect.php');
                    $id = $_SESSION['id'];
                    $sql = "SELECT * FROM thi, monhoc WHERE Mahs LIKE '%$id%' and thi.Mamh= monhoc.Mamh ORDER BY Ngaythi";
                    $result = mysqli_query($conn, $sql);
                    
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){ 
                            
                 ?>
                                <tr>
                                    
                                    <td><?php echo $row['Mamh']; ?></td>
                                    <td><?php echo $row['Tenmh']; ?></td>
                                    <td><?php echo $row['Sbd']; ?></td>
                                    <td><?php echo $row['Ngaythi']; ?></td>
                                    <td><?php echo $row['Phongthi']; ?></td>
                                    <td><?php echo $row['Giothi']; ?></td>
                                    
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
<?php include('../partial-font/footer_hs.php') ?>