function load()
{
  $('.loading').css('visibility', 'hidden');
}

$(document).ready(function(){
//=====> Start Plugins Area
$("body").niceScroll();
wow = new WOW(
  {
  boxClass:     'wow',      // default
  animateClass: 'animated', // default
  offset:       0,          // default
  mobile:       true,       // default
  live:         true        // default
}
)
wow.init();
//=====> Slider Home One
$('.autoplay').slick(
    {
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        rtl:true,
        prevArrow:'.prev',
        nextArrow:'.next',
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
              }
            },
            {
              breakpoint: 868,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
        ],
    });
    //=======> Slider Clients
    $('.slider-clients .info-slider').slick(
      {
          slidesToShow: 4,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          rtl:true,
          prevArrow:'.prev',
          nextArrow:'.next',
          responsive: [
              {
                breakpoint: 1024,
                settings: {
                  slidesToShow: 4,
                  slidesToScroll: 3,
                  infinite: true,
                }
              },
              {
                breakpoint: 768,
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
          ],
      });
//=====> End Plugins Area

//=====> Start Navbar Area
$('.fa-bars').click(function(){
    $('.menu-nav').slideToggle()
});
//=====> End Navbar Area

//=====> Scroll Up
var scrollButton = $('#scroll-up');

$(window).scroll(function(){

    if($(this).scrollTop() >= 1000){

        scrollButton.show();

    }else{

        scrollButton.hide();
    }


});

scrollButton.click(function(){
$('html,body').animate({
    scrollTop:0
}, 1000);
});

//====> Slider
$num = $('.my-card').length;
$even = $num / 2;
$odd = ($num + 1) / 2;

if ($num % 2 == 0) {
  $('.my-card:nth-child(' + $even + ')').addClass('active');
  $('.my-card:nth-child(' + $even + ')').prev().addClass('prev');
  $('.my-card:nth-child(' + $even + ')').next().addClass('next');
} else {
  $('.my-card:nth-child(' + $odd + ')').addClass('active');
  $('.my-card:nth-child(' + $odd + ')').prev().addClass('prev');
  $('.my-card:nth-child(' + $odd + ')').next().addClass('next');
}

$('.my-card').click(function() {
  $slide = $('.active').width();


  if ($(this).hasClass('next')) {
    $('.card-carousel').stop(false, true).animate({left: '=>' + $slide});
  } else if ($(this).hasClass('prev')) {
    $('.card-carousel').stop(false, true).animate({left: '=>' + $slide});
  }

  $(this).removeClass('prev next');
  $(this).siblings().removeClass('prev active next');
  $(this).addClass('active');
  $(this).prev().addClass('prev');
  $(this).next().addClass('next');
});

// Keyboard nav
$('html body').keydown(function(e) {
  if (e.keyCode == 39) { // left
    $('.active').prev().trigger('click');
  }
  else if (e.keyCode == 37) { // right
    $('.active').next().trigger('click');
  }
});


//===================================================
$('.apps-works #prev').click(function(){
  $('.active').prev().trigger('click');
});
$('.apps-works #next').click(function(){
  $('.active').next().trigger('click');
});
//====================================================
$('.navbar ul li a').click(function(event){
  event.preventDefault();
  $('html, body').animate({
    scrollTop: $('.' + $(this).data('scroll')).offset().top

  }, 1000);
});


});
