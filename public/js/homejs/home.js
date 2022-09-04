//Botão de Rolagem
$('.scroll-up-btn').click(function(){
    $('html').animate({scrollTop: 0});
    $('html').css("scrollBehavior", "auto");
});

//      Não mexer!

$('.navbar .menu li a').click(function(){
    $('html').css("scrollBehavior", "smooth");
});