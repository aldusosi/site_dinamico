$(function(){
    if($('target').length > 0)
        {
            // O Elemento existe portanto devemos dar o scroll em algum elemento
            var elemento = "#"+$('target').attr('target');
            var divScroll = $(elemento).offset().top;
        
            $('html,body').animate({'scrollTop':divScroll}, 2000);
        }
})