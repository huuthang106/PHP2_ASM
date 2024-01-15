<?php include('App/views/layouts/navbar.php') ?>
<div class="col-sm-12 col-xl-9 pt-5   mx-auto">
    <div class="bg-secondary rounded h-100 p-4">




        <h5 class="card-title">Cập nhật thông tin</h5>

        <!-- Form để cập nhật thông tin -->
        <form>
            <div class="form-floating mb-3">

                <input type="text" class="form-control" id="username" value="Hữu Thắng">
                <label for="floatingUser">Tên người dùng</label>
            </div>
            <div class="form-floating mb-3">

                <input type="email" class="form-control" id="email" value="Thangnhpc06404@fpt.edu.vn">
                <label for="floatingEmail">Email:</label>
            </div>
            <div class="form-floating mb-3">

                <input type="tel" class="form-control" id="phone" value="+84 123 456 789">
                <label for="floatingPhone">Số điện thoại:</label>
            </div>

            <div class="mb-3">
                <label for="formFileMultiple">Avarta</label>
                <input type="file" class="form-control bg-dark" id="avarta" value="public/assets/img/user.jpg">
            </div>
            
            <button type="submit" class="btn btn-outline-primary w-100 m-2">Cập nhật</button>

        </form>


    </div>
</div>

