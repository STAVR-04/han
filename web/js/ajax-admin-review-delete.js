$('.war').on('click', function () {
    id=$(this).attr('id');
    id_review = $(this).parent().attr('id');
    $.ajax({
        url:'/admin/ajaxreviewdelete',
        data: {id: id, id_review:id_review},
        type: 'POST',
        success: function(result){
            $('#'+id).parent().parent().remove();
        },
        error: function () {
            alert('Error!');
        }
    });
});
$('.wardel').on('click', function () {
    id=$(this).attr('id');
    id_review = $(this).parent().attr('id');
    $.ajax({
        url:'/admin/ajaxreviewdeletetour',
        data: {id: id},
        type: 'POST',
        success: function(result){
            $('#'+id).parent().parent().remove();
        },
        error: function () {
            alert('Error!');
        }
    });
});