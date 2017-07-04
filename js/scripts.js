$(function(){
  var toggleMenu = $('#toggle-menu');
  var nav = $('#main-nav');
  toggleMenu.on('click',function(){
    nav.add($('body')).toggleClass('mostrar');
  });
});