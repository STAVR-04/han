$('.rev').on('click', function () {
    var id=$(this).attr('id');
    $.ajax({
        url:'/admin/ajaxreview',
        data: {id: id},
        type: 'POST',
        success: function(result){
            $('#'+id).text(result);
        },
        error: function () {
            alert('Error!');
        }
    });
});
$('.rel').on('click', function () {
    var id=$(this).attr('id');
    $.ajax({
        url:'/admin/ajaxreviewtour',
        data: {id: id},
        type: 'POST',
        success: function(result){
            $('#'+id).text(result);
        },
        error: function () {
            alert('Error!');
        }
    });
});

$('#dop').on('click',function() {
    $("#myModalBox").modal('show');
});
$('#dop2').on('click',function() {
    $("#myModalBox2").modal('show');
});