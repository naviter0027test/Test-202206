$(document).ready(function() {
    var idTemp = $('[name=idTemp]').val();
    $.get('/announce/modifyGet/'+idTemp, function(result) {
        var r = JSON.parse(result);
        console.log(r);
        if(r['status'] == true) {
            $('[name=title]').val(r.d.title);
            $('[name=content]').val(r.d.content);
        }
    });

    $('.form1 .btn').click(function() {
        var p = {
            title: $('[name=title]').val(),
            content: $('[name=content]').val()
        };
        $.post('/announce/modify/'+idTemp, p, function(result) {
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
