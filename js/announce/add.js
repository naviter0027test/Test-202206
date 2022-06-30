$(document).ready(function() {

    $('.form1 .btn').click(function() {
        var p = {
            title: $('[name=title]').val(),
            content: $('[name=content]').val()
        };
        $.post('/announce/add', p, function(result) {
            var res = JSON.parse(result);
            console.log(res);
            if(res['status'] == true) {
                alert('處理完成');
                location.href='/announce';
            } else {
                alert(res.m);
            }
        });
        return false;
    });
});
