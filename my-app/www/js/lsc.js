
$(function(){
    setInterval(function(){
        var token = getCookie('token');

        if(token === undefined || token.length <= 0){
            window.location.href = "index.html";
            return;
        }
        $.ajax({
            url: 'http://34.74.113.124/telco_admin/check_session/',
            dataType: 'json',
            method: 'POST',
            data: {
                token: getCookie('token')
            }, success: function (data) {

            }, error: function () {
            }
        });
    }, 20000);
});