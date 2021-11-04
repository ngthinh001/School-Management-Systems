<?php include '../partial-font/header_admin.php' ?>
<?php require_once '../config/dbcommand.php' ?>
<div class="row justify-content-center">
    <div class="col-md-6 text-center mb-5">
        <h2 class="heading-section" style="margin-top: 30px;">Danh sách lịch thi</h2>
    </div>
</div>
<a href="../actions/acctest.php"><button class="btn btn-success">Thêm lịch</button></a>
<div class="row">
    <!-- <div class="col-md-6 text-center mb-5">
        <h2 class="heading-section">Table #02</h2>
    </div> -->
</div>
<div class="row">
    <div class="input-group" style="display:flex;justify-content: end;">
        <div class="form-outline">
            <input id="search-focus" type="search" id="form1" class="form-control" />
            <label class="form-label" for="form1">Tìm kiếm lịch thi</label>
        </div>
        <button type="button" class="btn btn-primary">
            <i class="fas fa-search"></i>
        </button>
    </div>
    <br>
    <div class="col-md-12">
        <div class="table-wrap">
            <table class="table" style="border-style: dashed double solid; border-width: 8px">
                <thead class="thead-dark">
                    <tr>
                        <th>Mã học sinh</th>
                        <th>Mã môn</th>
                        <th>Mã số báo danh</th>
                        <th>Ngày thi</th>
                        <th>Phòng thi</th>
                        <th>Giờ thi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = 'select * from thi';
                    $testList = getListOfObject($sql);
                    foreach ($testList as $test) {
                        echo '<tr class="alert" role="alert">
                        <th scope="row">' . $test['Mahs'] . '</th>
                        <td>' . $test['Mamh'] . '</td>
                        <td>' . $test['Sbd'] . '</td>
                        <td>' . $test['Ngaythi'] . '</td>
                        <td>' . $test['Phongthi'] . '</td>
                        <td>' . $test['Giothi'] . '</td>                   
                        <td>
                        <a href="../actions/acctest.php?id=' . $test['Mahs'] . '&Mamht=' . $test['Mamh'].'" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true" style="color: green"><i class="fas fa-user-edit"></i></span> 
                    </a>' ?>
                        <a onClick="return confirm('Bạn chắc chắn muốn xóa?');" href="../actions/delete.php?Mahst=<?php echo $test['Mahs'] ?>&Mamht=<?php echo $test['Mamh'] ?>" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true" style="color: red"><i class="fas fa-user-times"></i></span>
                        </a>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

<?php include '../partial-font/footer_admin.php' ?>