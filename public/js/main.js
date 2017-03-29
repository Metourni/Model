
/**
 * Created by Noureddine Metourni on 26/03/2017.
 */


var date= new Date();
$('.jumbotronP').html(date.getFullYear()+"/"+date.getDay()+"/"+date.getDate()+" "+date.getHours()+":"+date.getMinutes()+":"+date.getSeconds());
