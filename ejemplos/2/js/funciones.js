
$(function (){
      $(window).scroll(function(){
		var barra = $(window).scrollTop();
      	var contenido2 = $("#main").offset();
         if (barra > contenido2.top) {
          $('.navscroll').addClass("fondo");
          $('.btn').addClass("btn2");
         } else {
          $('.navscroll').removeClass("fondo");
          $('.btn').removeClass("btn2");
         }
      });
  });

