
<?php session_start(); ?>
<?php include('hearder.php') ?>
<main>
<div class="container">
        <h2>Lịch học chi tiết </h2>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Mã môn học</th>
                    <th scope="col">Tên môn học</th>
                    <th scope="col">Mã lớp</th>
                    <th scope="col">Tiết</th>
                    <th scope="col">Ngày học</th>
                    <th scope="col">Học kì</th>
                    <th scope="col">Năm học</th>
                   
                    </tr>
                </thead>
                <?php 
                     //kết nối với mysql
                    include('../sql/connect.php');
                    
                    $id = $_SESSION['id'];
                    $sql = "SELECT * FROM lichday, monhoc WHERE lichday.Mamh= monhoc.Mamh AND Mal = (SELECT Mal FROM hoc_sinh WHERE Mahs LIKE '%$id%')";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            $mamh = $row['Mamh'];  
                            $tenmh = $row['Tenmh'];
                            $mal= $row['Mal'];
                            $tiet = $row['Tiet'];
                            $ngayday = $row['Ngay'];
                            $Hocki = $row['Hocky'];
                            $namhoc = $row['Namhoc'];
                    
                        }
                    }
                ?>
                <tbody>
                    <tr>
                    <th ><?php echo  $mamh; ?></th>
                    <td><?php echo $tenmh; ?></td>
                    <td><?php echo $mal; ?></td>
                    <td><?php echo $tiet; ?></td>
                    <td><?php echo $ngayday; ?></td>
                    <td><?php echo $Hocki; ?></td>
                    <td><?php echo $namhoc; ?></td>
                    </tr>
                    
                </tbody>
            </table>
            <?php
            //Bước 4: Đóng kết nối
             mysqli_close($conn);
             ?>
    </div>
</main>

</main>
<?php include('footer.php') ?>