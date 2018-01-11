$('.delete-slider').on('click', function () {
    id=$(this).attr('id');
    id_review = $(this).parent().attr('id');
    $.ajax({
        url:'/admin/ajaxsliderdelete',
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
$('.attractions').on('click', function () {
    id=$(this).attr('id');
    $.ajax({
        url:'/admin/ajaxattractionsdelete',
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