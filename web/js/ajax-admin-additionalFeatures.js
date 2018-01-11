$('.additional').on('click', function () {
    var id=$(this).attr('id');
    var id_par = $(this).parent().attr('id');
    $.ajax({
        url:'/admin/ajaxadditional',
        data: {id : id, id_additional : id_par },
        type: 'POST',
        success: function(result){
            $("#"+id).text(result);
            console.log(result + id);
        },
        error: function () {
            alert('Error!');
        }
    });
});
$('#reload').on('click', function () {
    location.reload();
});