/**
 * Created by Noureddine on 28/03/2017.
 */



$('.img-circle').on('click',function () {
    var img = $(this).attr('src');
    swal({
        title: "Meto <small>pic </small>!",
        text: "A custom <span style=\"color:#F8BB86\">html<span> message. " +
        "<br>" +
        "<img class=\"img-circle\" src="+img+"/>",
        html: true
    }) ;
});
