<?php session_start(); ?>
<?php include('hearder.php') ?>
<main>
<div class="container">
        <h2>Danh sách điểm môn học </h2>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Mã học sinh</th>
                    <th scope="col">Họ tên</th>
                    <th scope="col">Mã môn học</th>
                    <th scope="col">Tên môn học</th>
                    <th scope="col">Mã lớp</th>
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
                    $sql = "SELECT  * FROM diem, hoc_sinh, monhoc WHERE diem.Mahs= hoc_sinh.Mahs AND diem.Mamh= monhoc.Mamh AND Mahs LIKE '%$id%' ";
                    $result = mysqli_query($conn, $sql);

                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            $mahs = $row['Mahs'];  
                            $hoten = $row['Hotenhs'];
                            $mamh= $row['Mamh'];
                            $tenmh = $row['Tenmh'];
                            $mal = $row['Mal'];
                            $diem = $row['Diem'];
                            $Hocki = $row['Hocky'];
                            $namhoc = $row['Namhoc'];
                    
                        }
                    }
                ?>
                <tbody>
                    <tr>
                    <th ><?php echo $mahs; ?></th>
                    <td><?php echo $hoten; ?></td>
                    <td><?php echo $mamh; ?></td>
                    <td><?php echo $tenmh; ?></td>
                    <td><?php echo $mal; ?></td>
                    <td><?php echo $diem; ?></td>
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

<?php include('footer.php') ?>