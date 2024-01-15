<body>
    
<?php include('App/views/layouts/navbar.php') ?>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-9 mx-auto">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Thêm nhật ký</h6>
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tiêu đề</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleTextarea" class="form-label">Nội dung</label>
                        <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="startDate" class="form-label">Ngày bắt đầu</label>
                        <input type="date" class="form-control" id="startDate">
                    </div>
                    <div class="mb-3">
                        <label for="endDate" class="form-label">Ngày kết thúc</label>
                        <input type="date" class="form-control" id="endDate">
                    </div>
                    
                    <button type="submit" class="btn btn-primary w-100" >Gửi</button>

                </form>
            </div>
        </div>
    </div>
</div>

<?php include('App/views/layouts/footer.php') ?>
</body>