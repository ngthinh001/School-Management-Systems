<?php include '../partial-font/header.php' ?>

<div class="row justify-content-center">
    <div class="col-md-6 text-center mb-5">
        <h2 class="heading-section" style="margin-top: 30px;">Danh sách học sinh</h2>
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
            <input id="search-focus" type="search" id="form1" class="form-control" />
            <label class="form-label" for="form1">Tìm kiếm học sinh</label>
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
                        <th>Tên học sinh</th>
                        <th>Ngày sinh </th>
                        <th>Giới tính</th>
                        <th>Số điện thoại</th>
                        <th>Mã lớp</th>
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