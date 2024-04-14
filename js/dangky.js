
// Lấy các thẻ input và span message
var passwordInput = document.getElementById('password');
var repasswordInput = document.getElementById('repassword');
var messageElement = document.getElementById('message');

// Thêm sự kiện input cho cả hai trường mật khẩu
passwordInput.addEventListener('input', checkPasswordMatch);
repasswordInput.addEventListener('input', checkPasswordMatch);

// Hàm kiểm tra khớp mật khẩu
function checkPasswordMatch() {
    var password = passwordInput.value;
    var repassword = repasswordInput.value;

    // Kiểm tra xem mật khẩu và nhập lại mật khẩu có khớp nhau không
    if (password === repassword) {
        messageElement.innerHTML = 'Mật khẩu khớp!';
    } else {
        messageElement.innerHTML = 'Mật khẩu không khớp!';
    }
}