<?php  
session_start();
$id=$_SESSION['id'];
 if(!empty($_FILES["book1"]["name"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "btl");  
      $output = '';  
      $allowed_ext = array("csv");  
      $extension = end(explode(".", $_FILES["book1"]["name"]));  
      if(in_array($extension, $allowed_ext))  
      {  
           $file_data = fopen($_FILES["book1"]["tmp_name"], 'r');  
           fgetcsv($file_data);  
           while($row = fgetcsv($file_data))  
           {  
                $Mahs = mysqli_real_escape_string($connect, $row[0]);
                $Hoten = mysqli_real_escape_string($connect, $row[1]);  
                $ngaysinh = mysqli_real_escape_string($connect, $row[3]);  
                $gioitinh = mysqli_real_escape_string($connect, $row[2]);  
                $Sdtph = mysqli_real_escape_string($connect, $row[5]);  
                $Mal = mysqli_real_escape_string($connect, $row[4]);  
                $Hocky = mysqli_real_escape_string($connect, $row[6]); 
                $Namhoc = mysqli_real_escape_string($connect, $row[7]); 
                $query = "  
                INSERT INTO  hoc_sinh 
                    (  Hotenhs, Mahs, Ngaysinh, Gioitinh, Sdtph, Mal, Hocky, Namhoc)  
                     VALUES ('$Hoten', '$Mahs','$ngaysinh', '$gioitinh', '$Sdtph', '$Mal','$Hocky','$Namhoc')  
                "; 
                mysqli_query($connect, $query);  
           }  
           $select = "SELECT * FROM hoc_sinh, lop WHERE Magv LIKE '%$id%' AND hoc_sinh.Mal = lop.Mal";  
           $result = mysqli_query($connect, $select);  
           $STT=1;
           $output .= '  
                <table class="table table-bordered">  
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
           ';  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>'.$STT++.'</td>  
                          <td>'.$row["Mahs"].'</td>  
                          <td>'.$row["Hotenhs"].'</td> 
                          <td>'.$row["Gioitinh"].'</td>
                          <td>'.$row["Ngaysinh"].'</td>  
                          <td>'.$row["Sdtph"].'</td>  
                          <td>'.$row["Mal"].'</td>  
                          <td>'.$row["Hocky"].'</td>  
                          <td>'.$row["Namhoc"].'</td>
                     </tr>  
                ';  
           }  
           $output .= '</table>';  
           echo $output;  
      }  
      else  
      {  
           echo 'Error1';  
      }  
 }  
 else  
 {  
      echo "Error2";  
 }  
 ?>  