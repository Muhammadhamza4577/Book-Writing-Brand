///////////////*****//////////////////
// RESPONSIVE NAVIGATION
// OPEN BTN

$('.tmls-slider').slick({
  dots: true,
  infinite: true,
  autoplay:true,
  arrows: false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});



$('.books-slider-main').slick({
  dots: true,
  infinite: true,
  arrows: false,
  autoplay: true,
  autoplaySpeed: 1000,
   speed: 1000,
  slidesToShow: 5,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});


  $(document).ready(function () {
    $("#navbar").on("click", function() {
      $(".nveMenu").addClass("is-opened");
      $(".overlay").addClass("is-on");
    });

    $(".overlay").on("click", function() {
      $(this).removeClass("is-on");
      $(".nveMenu").removeClass("is-opened");
    });
  });
// CLOSE BTN
  $(".overlay").on("click", function() {
    $(this).removeClass("is-on");
    $(".nveMenu").removeClass("is-opened");
  });

  $(".close-btn-nav").click(function(){
  $(".nveMenu").removeClass("is-opened");
  $(".overlay").removeClass("is-on");
  });
  // RESPONSIVE NAVIGATION
  // 
  // ACTIVE JS START
$(document).ready(function(){
  $('ul li span').click(function(){
    $('li span').removeClass("active-class");
    $(this).addClass("active-class");
});
});
  // ACTIVE JS END
  // 
  // PRELOADER START
$(document).ready(function() {
  setTimeout(function() {
  $('.preloader').fadeOut('slow');
            }, 2000);
});
  // PRELOADER END
///////////////*****//////////////////


// Live Chat Start
function setButtonURL() { $zopim.livechat.window.toggle(); } 
// Live Chat End
// FLOATING FORM STARTS
$(".clickbutton").click(function() {
  $('.floatbutton').toggleClass("active");
  //$('.crossplus').toggleClass("rotate");
});
// FLOATING FORM ENDS
// Second Header Start
$(function () {
  $(window).on("scroll", function () {
    if ($(window).scrollTop() > 50) {
      $(".header").addClass("active-header");
    } else {
      //remove the background property so it comes transparent again (defined in your css)
      $(".header").removeClass("active-header");
    }
  });
});

// counter
$('.count').each(function () {
    $(this).prop('Counter',0).animate({
  Counter: $(this).text()
}, {
  duration: 4000,
  easing: 'swing',
  step: function (now) {
  $(this).text(Math.ceil(now));
},
complete: function () {
$(this).append('+');
}
});
  });

$('.bages-carousel').owlCarousel({
    loop:false,
    margin:10,
    nav:false,
    dots:false,
    responsive:{
        0:{
            items:3.5
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})

$('.bages2-carousel').owlCarousel({
  loop:false,
  margin:10,
  nav:false,
  dots:false,
  responsive:{
      0:{
          items:3
      },
      600:{
          items:5
      },
      1000:{
          items:6
      }
  }
})

$('.testi-carousel').owlCarousel({
  loop:true,
  margin:10,
  nav:false,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:1
      },
      1000:{
          items:1
      }
  }
})

$('.portfolio-carousel').owlCarousel({
    loop:false,
    margin:10,
    nav:false,
    dots:false,
    lazyLoad: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})

$('.genres-carousel').owlCarousel({
    loop:false,
    margin:30,
    nav:false,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:2
        }
    }
})

$('.achieve-carousel').owlCarousel({
    loop:false,
    margin:10,
    nav:false,
    dots:false,
    responsive:{
        0:{
            items:2.5
        },
        600:{
            items:4
        },
        1000:{
            items:4
        }
    }
})

// Aos Start
    AOS.init();
// Aos End
// 
    

    (function() {
  $(function() {
    var toggle;
    return toggle = new Toggle('.toggle');
  });

  this.Toggle = (function() {
    Toggle.prototype.el = null;

    Toggle.prototype.tabs = null;

    Toggle.prototype.panels = null;

    function Toggle(toggleClass) {
      this.el = $(toggleClass);
      this.tabs = this.el.find(".tab");
      this.panels = this.el.find(".panel");
      this.bind();
    }

    Toggle.prototype.show = function(index) {
      var activePanel, activeTab;
      this.tabs.removeClass('active');
      activeTab = this.tabs.get(index);
      $(activeTab).addClass('active');
      this.panels.hide();
      activePanel = this.panels.get(index);
      return $(activePanel).show();
    };

    Toggle.prototype.bind = function() {
      var _this = this;
      return this.tabs.unbind('click').bind('click', function(e) {
        return _this.show($(e.currentTarget).index());
      });
    };

    return Toggle;

  })();

}).call(this);
