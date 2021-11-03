<?php  
 if(!empty($_FILES["diemcalop"]["name"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "");  
      $output = '';  
      $allowed_ext = array("csv");  
      $extension = end(explode(".", $_FILES["diemcalop"]["name"]));  
      if(in_array($extension, $allowed_ext))  
      {  
           $file_data = fopen($_FILES["diemcalop"]["tmp_name"], 'r');  
           fgetcsv($file_data);  
           while($row = fgetcsv($file_data))  
           {  
                $STT = mysqli_real_escape_string($connect, $row[0]);  
                $Hotenhs = mysqli_real_escape_string($connect, $row[1]);  
                $diem = mysqli_real_escape_string($connect, $row[2]);  
                $query = "INSERT INTO diemcalop (STT, ho_ten_hoc_sinh, diem_so)  
                     VALUES ('$STT', '$Hotenhs', '$diem') ";  
                mysqli_query($connect, $query);  
           }  
           $select = "SELECT * FROM diemcalop";  
           $result = mysqli_query($connect, $select);  
           $output .= '  
                <table class="table table-bordered">  
                     <tr>  
                         <th scope="col">STT</th>
                         <th scope="col">Họ tên học sinh</th>
                         <th scope="col">Điểm số</th> 
                     </tr>  
           ';  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>'.$row["STT"].'</td>  
                          <td>'.$row["ho_ten_hoc_sinh"].'</td>  
                          <td>'.$row["diem_so"].'</td>  
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
