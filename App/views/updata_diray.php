<body>
    
<?php include('App/views/layouts/navbar.php') ?>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-10 mx-auto">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Nhật ký</h6>
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tiêu đề</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="Du an 1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleTextarea" class="form-label">Nội dung</label>
                        <textarea class="form-control" id="exampleTextarea" rows="15" value="1">  Tao đánh đổi màn đêm yên giấc viết những bài nhạc hay nhất cuộc đời
                            Di/ sản là nguồn cảm hứng, fan theo răm rắp nhạc tao thuộc lời
                            Trên bàn tiệc của tiên và quỷ tao là thằng duy nhất được mời
                            Mọi thứ đổ dồn hết vào tao như kiểu tao là một ván cược hời
                            Tao là đứa con của mặt trăng, mang năng lượng mặt trời
                            Cuộc đời xoay tao như trực thăng, vẫn vượt lên như thể gặp thời
                            Tao không vứt đi bản chất tao như mấy thằng khác để ví được lời
                            Nếu mày cũng mặt nặng mài nhẹ vì không đồng ý thì thôi được rồi
                            Shout out cho anh Sea lời chúc phúc bay trên bầu trời
                            Em mong anh hãy nói với mẹ “cuộc sống con giờ đã đỡ cực rồi”
                            Hai anh em đã đổ nước mắt, nhiều câu chuyện về những người tồi
                            Sự đánh đổi này vẫn luôn đẹp như thể ngày xưa chơi cất nhà chồi
                            Fuck it, đêm đông lạnh giữa trời Hà Nội
                            Flow tao chảy cùng những niềm đau như thể đang châm thêm mực vào ngòi
                            Chuỗi hành trình cùng nhiều câu hỏi, ai là cá còn ai là mồi
                            Mọi thứ đều luôn có mặt tối nhưng liệu mày có sẵn sàng đánh đổi
                            Ngắm nhìn cả thế giới từ xa damn its cold
                            Nếu mày hỏi tao ác hay thiện man i dont know
                            Chắc đây vốn đã là cái giá cho bao lần đau
                            Sự đánh đổi này cho tao thấy mọi thứ đã không như ngày đầu
                            Ngắm nhìn cả thế giới từ xa damn its cold
                            Nếu mày hỏi tao ác hay thiện man i dont know
                            Chắc đây vốn đã là cái giá cho bao lần đau
                            Sự đánh đổi này cho tao thấy mọi thứ đã không như ngày đầu
                            its a fair trade
                            telling all the truth
                            its a fair trade
                            aint none pussy in the way
                            its a fair trade
                            fuck u if u fake it
                            its a fucking fair trade</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="startDate" class="form-label">Ngày bắt đầu</label>
                        <input type="date" class="form-control" id="startDate" value="2023-01-01">
                    </div>
                    <div class="mb-3">
                        <label for="endDate" class="form-label">Ngày kết thúc</label>
                        <input type="date" class="form-control" id="endDate" value="2023-12-31">
                    </div>
                    
                    <button type="submit" class="btn btn-primary w-100" >Gửi</button>

                </form>
            </div>
        </div>
    </div>
</div>

<?php include('App/views/layouts/footer.php') ?>
</body>