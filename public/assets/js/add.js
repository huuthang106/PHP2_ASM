let table = new DataTable('#myTable');

// Tạo form và thêm vào trang
function createLogoutForm() {
    var logoutForm = document.createElement('form');
    logoutForm.id = 'logoutForm';

    var confirmLabel = document.createElement('label');
    confirmLabel.setAttribute('for', 'confirmCheckbox');
    confirmLabel.innerText = 'Tôi xác nhận muốn đăng xuất';

    var confirmCheckbox = document.createElement('input');
    confirmCheckbox.type = 'checkbox';
    confirmCheckbox.id = 'confirmCheckbox';

    var confirmButton = document.createElement('button');
    confirmButton.type = 'button';
    confirmButton.innerText = 'Đồng ý';
    confirmButton.onclick = confirmLogout;

    logoutForm.appendChild(confirmLabel);
    logoutForm.appendChild(confirmCheckbox);
    logoutForm.appendChild(confirmButton);

    // Kiểm tra xem có form nào khác đã tồn tại không
    var existingForm = document.getElementById('logoutForm');
    if (existingForm) {
        // Nếu có, loại bỏ form cũ trước khi thêm form mới
        existingForm.parentNode.removeChild(existingForm);
    }

    document.body.appendChild(logoutForm);
}

// Xác nhận đăng xuất
function confirmLogout() {
    var confirmCheckbox = document.getElementById('confirmCheckbox');
    
    if (confirmCheckbox.checked) {
        // Nếu người dùng đã đánh dấu checkbox, thực hiện chuyển hướng đến trang login
        window.location.href = "index.php?act=login";
    } else {
        // Nếu không, tắt form
        var logoutForm = document.getElementById('logoutForm');
        if (logoutForm) {
            logoutForm.style.display = 'none';
        }
    }
}