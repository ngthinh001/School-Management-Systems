<?php session_start();?>

<?php include('hearder.php'); ?>
<main>
    <div class="container">
        <h2>Danh sách học sinh trong lớp </h2>
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
                    $sql = "SELECT * FROM hoc_sinh WHERE
                            Mal LIKE (SELECT Mal FROM hoc_sinh WHERE Mahs LIKE '%$id%')";
                    $result = mysqli_query($conn, $sql);

                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            $mahs = $row['Mahs'];  
                            $hoten = $row['Hotenhs'];
                            $gioitinh= $row['Gioitinh'];
                            $ngaysinh = $row['Ngaysinh'];
                            $mal = $row['Mal'];
                            $Hocki = $row['Hocky'];
                            $namhoc = $row['Namhoc'];
                    
                        }
                    }
                ?>
                <tbody>
                    <tr>
                    <th ><?php echo $mahs; ?></th>
                    <td><?php echo $hoten; ?></td>
                    <td><?php echo $gioitinh; ?></td>
                    <td><?php echo $ngaysinh; ?></td>
                    <td><?php echo $mal; ?></td>
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

<?php include('footer.php');
