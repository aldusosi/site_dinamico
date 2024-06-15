$(function(){
    $('nav.mobile').click(function(){
        
        var lista_menu = $('nav.mobile ul');
        var icone = $('.botao-menu-mobile').find('i');

        if(lista_menu.is(':hidden'))
        {
            icone.removeClass('fa-bars');
            icone.addClass('fa-times');
            lista_menu.show();
        }
        else
        {
            icone.removeClass('fa-times');
            icone.addClass('fa-bars');
            lista_menu.hide();
        }
        
    });
})