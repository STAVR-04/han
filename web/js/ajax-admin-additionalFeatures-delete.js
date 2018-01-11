$('.delete').on('click', function () {
    var id=$(this).attr('id');
    var id_par = $(this).parent().attr('id');
    $.ajax({
        url:'/admin/ajaxadditionaldelete',
        data: {id : id, id_additional : id_par },
        type: 'POST',
        success: function(result){
            $('#'+id).parent().parent().remove();
        },
        error: function () {
            alert('Error!');
        }
    });
});
$('.dele').on('click', function () {
    var id=$(this).attr('id');
    $.ajax({
        url:'/admin/ajaxaditionaltourdelete',
        data: {id : id},
        type: 'POST',
        success: function(result){
            $('#'+id).parent().parent().remove();
        },
        error: function () {
            alert('Error!');
        }
    });
});
