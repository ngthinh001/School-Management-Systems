<?php require_once '../config/dbcommand.php' ?>
<?php include '../partial-font/header.php' ?>

<style>
    .input-group .form-control {
        border-width: 1px;
        border-style: solid;
        border-radius: 5px;
    }
</style>
<div class="row justify-content-center">
    <div class="col-md-6 text-center mb-5">
        <h2 class="heading-section" style="margin-top: 30px;">Danh sách thời khóa biểu</h2>
    </div>
</div>

<div class="row">
    <!-- <div class="col-md-6 text-center mb-5">
        <h2 class="heading-section">Table #02</h2>
    </div> -->
</div>
<div class="row">
    <div class="input-group" style="display:flex;justify-content: end;">
        <div class="form-outline">
            <div class="input-group">
                <input id="search-focus" type="search" id="form1" class="form-control" placeholder="Nhập mã giáo viên" />
                <input id="search-focus" type="search" id="form1" class="form-control" placeholder="Nhập mã môn" />
                <input id="search-focus" type="search" id="form1" class="form-control" placeholder="Nhập mã lớp" />
            </div>
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
                        <th>Mã giáo viên</th>
                        <th>Mã môn</th>
                        <th>Mã lớp</th>
                        <th>Tiết</th>
                        <th>Ngày</th>
                        <th>Học kỳ</th>
                        <th>Năm học</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = 'select * from lichday';
                    $scheduleList = getListOfObject($sql);
                    foreach ($scheduleList as $schedule) {
                        echo '<tr class="alert" role="alert">
                        <th scope="row">' . $schedule['Magv'] . '</th>
                        <td>' . $schedule['Mamh'] . '</td>
                        <td>' . $schedule['Mal'] . '</td>
                        <td>' . $schedule['Tiet'] . '</td>
                        <td>' . $schedule['Ngay'] . '</td>
                        <td>' . $schedule['Hocky'] . '</td>
                        <td>' . $schedule['Namhoc'] . '</td>                      
                        <td>
                            <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="fa fa-close"></i></span>
                            </a>
                        </td>
                         </tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

<?php include '../partial-font/footer.php' ?>