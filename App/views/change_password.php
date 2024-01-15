<?php include('App/views/layouts/navbar.php') ?>
<div class="col-sm-12 col-xl-9 pt-5   mx-auto">
    <div class="bg-secondary rounded h-100 p-4">
        <h5 class="card-title">Đổi mật khẩu</h5>

        <!-- Form để cập nhật thông tin -->
        <form>
            <div class="form-floating mb-3">

                <input type="password" class="form-control" id="username" value="">
                <label for="floatingUser">Nhập mật khẩu cũ:</label>
            </div>
            <div class="form-floating mb-3">

                <input type="password" class="form-control" id="email" value="">
                <label for="floatingEmail">Mật khẩu mới:</label>
            </div>
            <div class="form-floating mb-3">

                <input type="password" class="form-control" id="phone" value="">
                <label for="floatingPhone">nhập lại mật khẩu mới:</label>
            </div>


            <button type="submit" class="btn btn-outline-primary w-100 m-2">Cập nhật</button>

        </form>


    </div>
</div>