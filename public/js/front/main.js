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
    $('#info-box').offset({top:e.pageY-$('#info-box').height()-30});
    $('#info-box').css('left',e.pageX-($('#info-box').width())/2);

  }).mouseover();


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


//affichage du menu responsive en dessous de 640px

    $('#menu').on('click', function(e){
        e.preventDefault();
        e.stopImmediatePropagation();
        if($('.menu-co').is(':hidden')){
            $('.menu-co').slideDown(200);

        }else{
            $('.menu-co').slideUp(200);

        }
    });

//Detection de la largeur de la fenetre pour afficher  le menu selon la forme voulue
    var $window = $(window);
    var $menu = $('.menu-co');

    function checkWidthBig() {
        var windowsize = $window.width();
        if (windowsize >= 623) {
            $('.menu-co').show();
        }
    }
    function checkWidthSmall() {
        var windowsize = $window.width();
        if (windowsize < 620) {
            $('.menu-co').hide();
        }
    }

    $(window).resize(checkWidthBig);
    $(window).resize(checkWidthSmall);


  ////////////////////////////////////////////////////
  ///////Affichage des forms ajout item / retail//////
  ////////////////////////////////////////////////////

  $('#add-item').on('click', function(e){
    e.preventDefault();
    e.stopImmediatePropagation();
    if($('#form-item').is(':hidden')){
        $('#form-item').off().slideDown(200);
        $('#add-item').html('-');

    }else{
        $('#form-item').off().slideUp(200);
        $('#add-item').html('+');
    }
  });

  $('#add-retail').on('click', function(e){
    e.preventDefault();
    e.stopImmediatePropagation();
    if($('#form-retail').is(':hidden')){
        $('#form-retail').off().slideDown(200);
        $('#add-retail').html('-');

    }else{
        $('#form-retail').off().slideUp(200);
        $('#add-retail').html('+');
    }
  });


  //Instanciation des parallaxs

  var scene = document.getElementById('scene');
              var parallaxInstance = new Parallax(scene, {
              relativeInput: true,
              invertY: false,
              limitY: true,
              scalarX: 20,
              frictionY: 0.15,
              });

  var scenev = document.getElementById('scenev');
              var parallaxInstance = new Parallax(scenev, {
              relativeInput: true,
              invertX: false,
              frictionX: 0.075,
              });




  //  Gestion de l'animation des abeilles

    var params = {
      container: document.getElementById('lottie'),
      renderer: 'svg',
      loop: true,
      autoplay: true,
      animationData: animationData
    };

    var anim;

    anim = lottie.loadAnimation(params);

});
