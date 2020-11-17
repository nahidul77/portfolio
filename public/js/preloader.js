$(window).on("load", function() {
    $(".loader-text").fadeOut();
    $("body").addClass("loaded");
    $(".pk-loader").fadeOut("slow", function(){
      $(this).remove();
    }); 
});