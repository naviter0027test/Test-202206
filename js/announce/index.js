$(document).ready(function() {
    $.get('/announce/indexGet', function(result) {
        var r = JSON.parse(result);
        console.log(r);
        $('.table1 tbody').html('');
        if(r['status'] == true) {
            for(var i = 0;i < r.index.length;++i) {
                $('.table1 tbody').append("<tr><td>"+ r.index[i]['title']+ "</td><td>"+ r.index[i]['createdDate']+ "</td><td>"+ r.index[i]['updatedDate']+ "</td><td><a href='/announce/modifyPage/"+ r.index[i]['id']+ "' class='glyphicon glyphicon-pencil'></a><a href='/announce/del/"+ r.index[i]['id']+ "' class='glyphicon glyphicon-remove del'></a></td></tr>");
            }
            $('.del').click(function() {
                if(confirm('確定刪除?') == false) {
                    return false;
                }
                var href = $(this).attr('href');
                $.get(href, function(result) {
                    var res = JSON.parse(result);
                    console.log(res);
                    if(res['status'] == true) {
                        alert('處理完成');
                        location.href = '/announce/';
                    } else {
                        alert(res.m);
                    }
                });
                return false;
            });
        }
    });
});
