$(function(){
    $('nav.mobile').click(function(){
        
        var lista_menu = $('nav.mobile ul');

        if(lista_menu.is(':hidden'))
        {
            lista_menu.show();
        }
        else
        {
            lista_menu.hide();
        }
    })
})