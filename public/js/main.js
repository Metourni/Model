
/**
 * Created by Noureddine Metourni on 26/03/2017.
 */

$('.img-circle').on('click',function () {
    var url = $(this).attr('src');
    swal({
        title: "HTML <small>Title </small>!",
        text: "A custom <span style=\"color:#F8BB86\">html<span> message. " +
        "<br>" +
        "<img class=\"img-circle\" src="+url+"/>",
        html: true
    }) ;
});
