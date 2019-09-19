// JavaScript Document

   $(window).scroll(function(){
       var scroll = $(window).scrollTop();
           sticky= $('.header');
       
        if(
            scroll >= 25
        ){
            sticky.addClass('fixed')
        }else{
            sticky.removeClass('fixed'  )
        }
       
   });



   $('.infograph_info').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    adaptiveHeight: true,
    dots: false,
    fade: true,
    asNavFor: '.infograph_menus'
  });
  $('.infograph_menus').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    asNavFor: '.infograph_info',
    dots: false,
    centerMode: false,
    focusOnSelect: true,
    adaptiveHeight: true,
  });



/*    	
$('.infograph_left ul li').click(function(){
    var index = $(this).index();
    $('.infograph_left ul li').removeClass('active');
    $(this).addClass('active');
    $('.infograph_content').removeClass('active');
    $('.infograph_content:eq(' + index + ')').addClass('active');
});
 */


   $(window).resize(function(){
       var getwidth = $(this).width();
       if(getwidth >= 767){
           $('.menu').removeAttr('style');
       }
   })
    
   $(document).ready(function(){

    $('.banner_slider').slick({
        dots: false,
        infinite: true,
        speed: 1500,
        slidesToShow: 1,
        adaptiveHeight: true
      });

      $('.testimonial_slider').slick({
        dots: true,
        arrows:false,
        autoplay:true,
        infinite: true,
        speed: 1000,
        slidesToShow: 1,
        adaptiveHeight: true
      });


      $('.service_list').slick({
        dots: true,
        arrows:false,
        autoplay:true,
        infinite: true,
        speed: 1000,
        slidesToShow: 4,
        slidesToScroll: 4,
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
            breakpoint: 768,
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
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });



   })
       



 