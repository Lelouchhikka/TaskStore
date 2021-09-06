function myAccFunc() {
    var x = document.getElementById("demoAcc");
    var btn=document.getElementById("btnDiv1");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show ";
        x.previousElementSibling.className += " ";
        btn.textContent='Типы задания ᐱ'
    } else {
        btn.textContent='Типы задания ᐯ'
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className =
            x.previousElementSibling.className.replace(" w3-green", "");
    }
}
$(document).ready(function () {
    $("#sidebar").niceScroll({
        cursorcolor: '#53619d',
        cursorwidth: 4,
        cursorborder: 'none'
    });

    $('.overlay').on('click', function () {
        $('#sidebarCollapse').addClass('active');
        $('#sidebar').removeClass('active');
        $('.overlay').fadeOut();
    });

    $('#sidebarCollapse').on('click', function () {
        if($(this).hasClass('active')){
            $(this).removeClass('active');
            $('#sidebar').addClass('active');
            $('.overlay').fadeIn();
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        }
    });
});



