$( document ).ready(function() {


 ///////////////////
 /////SVG MAP //////
 ///////////////////

  $(".svg-path").hover(function(e) {
    $('#info-box').css('display','block');
    $('#info-box').html($(this).data('info'));
  });

  $(".svg-path").mouseleave(function(e) {
    $('#info-box').css('display','none');
  });

  $(document).mousemove(function(e) {
    $('#info-box').css('top',e.pageY-$('#info-box').height()-30);
    $('#info-box').css('left',e.pageX-($('#info-box').width())/2);
  }).mouseover();

  // var ios = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
  // if(ios) {
  //   $('a').on('click touchend', function() {
  //     var link = $(this).attr('href');
  //     window.open(link,'_blank');
  //     return false;
  //   });
  // }

  /////////////////////////////////////
  ///////SMOOTH SCROLL ACCUEIL/////////
  /////////////////////////////////////

  $('.scrollToMap').on('click', function() {
    var page = $(this).attr('href');
    var speed = 800;
    $('html, body').animate( { scrollTop: $(page).offset().top }, speed );
    return false;
  });


});
