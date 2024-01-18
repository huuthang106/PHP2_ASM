let table = new DataTable('#myTable',
{
    language: {
    url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/vi.json',
},});

//sắp xếp thứ tự kéo thả 



// Tạo form và thêm vào trang
function showLogoutConfirmation() {
    var isConfirmed = confirm('Bạn có chắc chắn muốn đăng xuất?');

    if (isConfirmed) {
        // Nếu người dùng xác nhận, thực hiện chuyển hướng đến trang logout
        window.location.href = "index.php?act=logout";
    }
}