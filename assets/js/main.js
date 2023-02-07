jQuery(document).ready(function(){

  /* RELATED POSTS SLIDER */
  jQuery('[data-behaviour~=sbct-related-posts-slider]').each( function () {
    var $this = jQuery( this ),
      slide = 3,
      infinity = true,
      autoplay = false,
      dots_show = true,
      arrows_show = true;
      $this.slick({
        infinite      : infinity,
        slidesToShow  : slide,
        slidesToScroll: slide,
        dots          : dots_show,
        autoplay      : autoplay,
        autoplaySpeed : 5000,
        speed         : 300,
        arrows        : arrows_show,
        nextArrow     : '<button type="button" class="slick-next slick-nav"><i class="fa fa-angle-right"></i></button>',
        prevArrow     : '<button type="button" class="slick-prev slick-nav"><i class="fa fa-angle-left"></i></button>',
        responsive    : [
          {
            breakpoint: 1169,
            settings  : {
              slidesToShow  : 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings  : {
              slidesToShow  : 1,
              slidesToScroll: 1
            }
          }
        ]
      });	// slick

      $this.addClass( 'loaded' );
  });

});
