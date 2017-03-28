/**
 * Created by Noureddine on 28/03/2017.
 */



function rotateCard(){
    var $card = $('.card-container');
    if($card.hasClass('hover')){
        $card.removeClass('hover');
    } else {
        $card.addClass('hover');
    }
}
