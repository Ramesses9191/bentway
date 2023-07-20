//sandwich click
$(document).ready(function(){
	$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
		$(this).toggleClass('open')
		$(this).closest('.header_nav').toggleClass('open')
	});
});


$(function(){

	$('.top_slider_wrap').slick({
	  dots: false,
	  arrows: false,
	  infinite: true,
	  speed: 300,
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  mobileFirst: true,
	  //variableWidth: true,
	  responsive: [
         {
            breakpoint: 992,
            settings: {
            	arrows: true
            }
         },
         // {
      //       breakpoint: 0,
      //       settings: {
      //       	variableWidth: true,
      //       }
         // }
	   ]
	});


	$('.adv_slider_wrap').slick({
	  dots: false,
	  infinite: true,
	  speed: 300,
	  slidesToShow: 4,
	  slidesToScroll: 4,
	  mobileFirst: true,
	  variableWidth: true,
	  responsive: [
         {
            breakpoint: 992,
            settings: {
            	arrows: true,
            }   
         },
         {
            breakpoint: 0,
            settings: {
            	arrows: false,
                slidesToShow: 1,
                centerMode: true,
                centerPadding: '40px'
            }   
         }
	   ]
	});

	$('.serv_list').slick({
	  dots: false,
	  //arrows: false,
	  infinite: true,
	  speed: 300,
	 // slidesToShow: 1,
	  //slidesToScroll: 1,
	  mobileFirst: true,
	  variableWidth: true,
	  //centerMode: true,
	  responsive: [
         {

         	breakpoint: 992,
         	settings: 'unslick'
         },
         {
         	
            breakpoint: 0,
            settings: {
            	arrows: false,
            	slidesToShow: 1,
                centerMode: true,
                centerPadding: '40px'
            }
         }
	   ]
	});

})    