<body>
    <div class="container-fluid position-relative d-flex p-0">
        <?php include('App/views/layouts/navbar.php') ?>

        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">

                <div class="col-12">
                    <div class="bg-secondary rounded h-100 p-4">
                        <h6 class="mb-4">Thông báo</h6>
                        <div class="table-responsive">
                            <table class="table" id='myTable'>
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Tiêu đề</th>
                                        <th scope="col">Email người mời</th>
                                        <th scope="col"> Tên người mời</th>
                                        
                                        <th scope="col">Chấp nhận</th>
                                        <th scope="col">Từ chối</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Dự án 1</td>
                                        <td>Thangnhpc06404@gmail.com</td>
                                        <td>Nguyễn Hữu Thắng</td>
                                     
                                        <td> <a href="#" class="btn-dark-custom">Chấp nhận</a></td>
                                        <td><a href="#" class="btn-dark-custom">Từ chối</a></td>
                                    </tr>
                                    
                                  

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <?php include('App/views/layouts/footer.php') ?>

    </div>
    <!-- Content End -->


    <!-- Back to Top -->


    <!-- JavaScript Libraries -->

</body>