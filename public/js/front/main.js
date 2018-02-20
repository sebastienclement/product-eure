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


  ////////////////////////////////////////////////////
  ///////Affichage de la fenetre de recherche/////////
  ////////////////////////////////////////////////////



    $('#toggle-search').on('click', function(e){
        e.preventDefault();
        e.stopImmediatePropagation();
        if($('#search-tag-2').is(':hidden')){
            $('#search-tag-2').slideDown(500);
            $('#toggle-search').html('Fermer la fenêtre de recherche');
            $('#toggle-search').css('color','red');
            $('.list-prod').animate({
                opacity:0.2
            },500);
        }else{
            $('#search-tag-2').slideUp(500);
            $('#toggle-search').html('Effectuer une autre recherche');
            $('#toggle-search').css('color','#3E8022');
            $('.list-prod').animate({
                opacity:1
            },500);
        }
    });

    $('#menu').on('click', function(e){
        e.preventDefault();
        e.stopImmediatePropagation();
        if($('.menu-co').is(':hidden')){
            $('.menu-co').slideDown('slow');

        }else{
            $('.menu-co').slideUp('slow');

        }
    });

});
