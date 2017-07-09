$(function() {
    $('.showbox').fadeOut(300);
    
    var accentColor = $('.accentColor').html();
    
    $('.header-title').each(function () {
        this.innerHTML = this.innerHTML.replace( /^(.+?\s)/, '<span style="color:' + accentColor +'">$1</span>' );
    });
    
   $("#my-menu").mmenu({
        extensions:['theme-dark','fx-listitems-slide'],
        navbar: {
            title: "Меню"
        },
        offCanvas: {
               position  : "right",
               zposition : "front"
            }
    });
    
    var api = $("#my-menu").data( "mmenu" );
    
    api.bind( "open:start", function() {
         $('.hamburger').addClass('is-active');
      });
    api.bind( "close:after", function() {
         $('.hamburger').removeClass('is-active');
      });
    
    $('.gallery-box').magnificPopup({
		delegate: 'a',
		type: 'image',
		closeOnContentClick: false,
		closeBtnInside: false,
		mainClass: 'mfp-with-zoom mfp-img-mobile',
        fixedContentPos: false,
		image: {
			verticalFit: true
			
		},
		gallery: {
			enabled: true
		},
		zoom: {
			enabled: true,
			duration: 300, // don't foget to change the duration also in CSS
			opener: function(element) {
				return element.find('img');
			}
		}
		
	});
    
    $('.prodImg-wrapp').magnificPopup({
		delegate: 'a',
		type: 'image',
		closeOnContentClick: false,
        fixedContentPos: false,
		closeBtnInside: false,
		mainClass: 'mfp-with-zoom mfp-img-mobile',
		image: {
			verticalFit: true
			
		},
		gallery: {
			enabled: true
		},
		zoom: {
			enabled: true,
			duration: 300, // don't foget to change the duration also in CSS
			opener: function(element) {
				return element.find('img');
			}
		}
		
	});
    
    
    
    $(".slider1").owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        items:3,
        responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:3,
            nav:false,
            loop:true
        }
    }
    });
    
    $(".slider2").owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        items:3,
        responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:3,
            nav:false,
            loop:true
        }
    }
    });
    
    $(".slider3").owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        items:4,
        responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:4,
            nav:false,
            loop:true
        }
    }
    });
    

   $('.navigation .prev').click(function() {
        $(".slider3").trigger('prev.owl.carousel');
   })
   $('.navigation .next').click(function() {
        $(".slider3").trigger('next.owl.carousel');
   })
   
   $('.map .filter').click(function(){
       $(this).fadeOut(500);
   })
    
   $('.serv-box p').equalHeights();
    
    $(".fa-anchor").click(function() {
    $('html, body').animate({
        scrollTop: $(".gallery").offset().top
    }, 700);
    }); 
    
    $('a[href^="#"]').bind('click.smoothscroll',function (e) {
		e.preventDefault();
 
		var target = this.hash,
		$target = $(target);
 
		$('html, body').animate({
			'scrollTop': $target.offset().top - $(".header-menu").height()
		}, 600, 'swing', function () {
			window.location.hash = target;
		});
	});
    
    $('.mymenu li').append('<span class="line"></span>')  
    
    $(".header-menu").animated("fadeInDown");
    $(".header-box").animated("jello");
    $(".connect-box").animated("jello");
    $(".mod-title").animated("fadeIn");
    $(".gallery-box").animated("fadeIn");
    $(".serv-box").animated("fadeIn");
    $(".anim1").animated("fadeInLeft");
    $(".anim2").animated("fadeInRight");
    $(".slider1").animated("fadeIn");
    $(".products-text").animated("flipInX");
    $(".slider2").animated("fadeIn");
    $(".slider3").animated("fadeIn");
});
