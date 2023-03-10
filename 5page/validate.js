$('.content').on('submit', function () {

    var password = $('#ip-password').val();
    var nhapLaiPassword = $('#ip-confirm-password').val();

    var email = $('#ip-email').val();
    var nhapLaiEmail = $('#ip-confirm-email').val();
    if(password != nhapLaiPassword || email != nhapLaiEmail) {
        alert("Nhập lại password or email sai!");
    }
    else {
        alert("Chúc mừng bạn đã đăng ký thành công!");
        window.location.href = "home.html"
    }

    return false;
})

function resetFields() {
    document.getElementById("ip-id").value = "";
    document.getElementById("ip-password").value = "";
    document.getElementById("ip-confirm-password").value = "";
    document.getElementById("ip-email").value = "";
    document.getElementById("ip-confirm-email").value = "";
}

