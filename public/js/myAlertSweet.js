/**
 * Created by Noureddine on 28/03/2017.
 */



function read_more_btn() {
    swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function(isConfirm){
            if (isConfirm) {
                swal("Deleted!", "Your imaginary file has been deleted.", "success");
            } else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
        });
}

$('.img-circle').on('click',function () {
    var img = $(this).attr('src');
    swal({
        title: "Meto <small>pic </small>!",
        text: "A custom <span style=\"color:#F8BB86\">html<span> message. " +
        "<br>" +
        "<img class=\"img-circle\" src="+img+"/>",
        allowEscapeKey:true,
        allowOutsideClick:true,
        confirmButtonText : 'mehdi',
        html: true
    }) ;
});
