window.onscroll = function()
{
if( window.XMLHttpRequest ) {
    if (document.documentElement.scrollTop > 500 || self.pageYOffset > 500) {
        $('#totop').css('display','block');
    } else if (document.documentElement.scrollTop < 500 || self.pageYOffset < 500) {
        $('#totop').css('display','none');
      }
  }
}

$(function(){
$('a[href*="#"]').stop().click(function(){
  if(location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
    var UD_HASH = this.hash;
    var UD_ZIEL = $(this.hash);
    if(UD_ZIEL.length){
      var UD_ABSTAND_TOP = UD_ZIEL.offset().top;
      $('html,body').animate({scrollTop: UD_ABSTAND_TOP},1500,function(){
      window.location.hash = UD_HASH;
    });
    return false;
  }
  }
  });
});
