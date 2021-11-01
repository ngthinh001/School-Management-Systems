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
        <h2 class="heading-section" style="margin-top: 30px;">Danh sách lịch công tác</h2>
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
                    <tr class="alert" role="alert">
                        <th scope="row">001</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>markotto@email.com</td>
                        <td>
                            <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="fa fa-close"></i></span>
                            </a>
                        </td>
                    </tr>
                    <tr class="alert" role="alert">
                        <th scope="row">002</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>jacobthornton@email.com</td>
                        <td>
                            <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="fa fa-close"></i></span>
                            </a>
                        </td>
                    </tr>
                    <tr class="alert" role="alert">
                        <th scope="row">003</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>larrybird@email.com</td>
                        <td>
                            <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="fa fa-close"></i></span>
                            </a>
                        </td>
                    </tr>
                    <tr class="alert" role="alert">
                        <th scope="row">004</th>
                        <td>John</td>
                        <td>Doe</td>
                        <td>johndoe@email.com</td>
                        <td>
                            <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="fa fa-close"></i></span>
                            </a>
                        </td>
                    </tr>
                    <tr class="alert" role="alert">
                        <th scope="row">005</th>
                        <td>Gary</td>
                        <td>Bird</td>
                        <td>garybird@email.com</td>
                        <td>
                            <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="fa fa-close"></i></span>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

<?php include '../partial-font/footer.php' ?>