$('document').ready(function(){
  $('#Loader').hide();
  $('.container').show();
  
  var menuStatus=0;
  $('.menu-icon').on('click',function(){
    
    if(menuStatus==0) {
      $('.menu').addClass('showMenu');
       menuStatus=1;
      $('.icon-bar').addClass('icon-bar-anim');
      $('.icon-bar').removeClass('icon-bar-anim-off');
    } else {
      $('.menu').removeClass('showMenu');
       menuStatus=0;
      $('.icon-bar').removeClass('icon-bar-anim');
      $('.icon-bar').addClass('icon-bar-anim-off');
    }
  });
  
});