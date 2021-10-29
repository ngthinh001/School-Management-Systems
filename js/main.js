document.addEventListener("DOMContentLoaded", function(event) {

    const showNavbar = (toggleId, navId, bodyId, headerId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId),
    bodypd = document.getElementById(bodyId),
    headerpd = document.getElementById(headerId)
    
    // Validate that all variables exist
    if(toggle && nav && bodypd && headerpd){
    toggle.addEventListener('click', ()=>{
    // show navbar
    nav.classList.toggle('show')
    // change icon
    toggle.classList.toggle('bi-x')
    // add padding to body
    bodypd.classList.toggle('body-pd')
    // add padding to header
    headerpd.classList.toggle('body-pd')
    })
    }
    }
    
    showNavbar('header-toggle','nav-bar','body-pd','header')
    
    /*===== LINK ACTIVE =====*/
    const linkColor = document.querySelectorAll('.nav_link')
    
    function colorLink(){
    if(linkColor){
    linkColor.forEach(l=> l.classList.remove('active'))
    this.classList.add('active')
    }
    }
    linkColor.forEach(l=> l.addEventListener('click', colorLink))
    
    // Your code to run since DOM is loaded and ready
    });

// Hàm gửi tin nhắn
function sendMsg() {
    // Khai ba1oca1c biến trong form
    $body_msg = $('#formSendMsg input[type="text"]').val();
 
    // Gửi dữ liệu
    $.ajax({
        url: 'sendmsg.php', // đường dẫn file xử lý
        type: 'POST', // phương thức
        // dữ liệu
        data: {
            body_msg: $body_msg
                    // thực thi khi gửi dữ liệu thành công
        }, success: function () {
            $('#formSendMsg input[type="text"]').val(''); // làm trống thanh trò chuyện
        }
    });
}
 
// Bắt sự kiện gõ phím enter trong thanh trò chuyện
$('#formSendMsg input[type="text"]').keypress(function () {
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if (keycode == '13') {
        // Chạy hàm gửi tin nhắn
        sendMsg();
    }
});
 
// Bắt sự kiện click vào thanh trò chuyện
$('#formSendMsg input[type="text"]').click(function (e) {
    // Kéo hết thanh cuộn trình duyệt đến cuối
    window.scrollBy(0, $(document).height());
});