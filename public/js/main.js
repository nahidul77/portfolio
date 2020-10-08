$(document).ready(function(){
  $(window).scroll(function(){
    var position= $("#about").offset().top;
      if(position){
        jQuery('.skillbar').each(function(){
          jQuery(this).find('.skillbar-bar').animate({
            width:jQuery(this).attr('data-percent')
          },3000);
        });
      }
  });

  $(function() {
      $("body").niceScroll({
        cursorcolor: "#FED136",
        cursorborder: "0px",
        horizrailenabled:false
      })
  });

  var containerEl = document.querySelector('.portfolio-image');
   var mixer = mixitup(containerEl,{
     selectors:{
       control: '[data-mixitup-control]'
     }
   });

});


// $("#navbarNav a").click(function(){
//   var hash = this.hash;
//   var position= $(hash).offset().top;
//   $("html").animate({
//     scrollTop:position
//   });
//
// });
//
// $(document).ready(function(){
//     var position= $("#about").offset().top;
// });
//


// $(document).ready(function(){
//   $(window).scroll(function(){
//     var positiontop = $(document).scrollTop();
//     console.log(positiontop);
//       if(positiontop >918 ||positiontop >8970){
//         $('#card-1').addClass('animated bounceInLeft');
//         $('#card-2').addClass('animated bounceInLeft');
//         $('#card-3').addClass('animated bounceInLeft');
//         $('#card-4').addClass('animated bounceInLeft');
//       }
//
//
//   });
//
// });
