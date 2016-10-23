$(document).ready(function(){

   $(window).on('scroll', function(){
		if ($(window).scrollTop()>200) {
			$("#nav1").css({"display":"none"});
			$("#nav2").css({"display":"block"});
			$("#arriba").css({"display":"block"});
			$(".navbar-wrapper").css({"margin-top": "0px"});
		}else{
			$("#nav1").css({"display":"block"});
			$("#nav2").css({"display":"none"});
			$("#arriba").css({"display":"none"});
			$(".navbar-wrapper").css({"margin-top": "20px"});
		}
	});
   		$( ".sub" ).hover(
		  function() {
		    $( this ).append( $( "<span class='glyphicon glyphicon-cog tuerqui' aria-hidden='true'></span>" ) );
		  }, function() {
		    $( this ).find( "span:last" ).remove();
		  }
		);
		 
		$( ".sub.fade" ).hover(function() {
		  $( this ).fadeOut( 100 );
		  $( this ).fadeIn( 500 );
		});

			//SUAVIZAR LINK LOCALES
		$('a[href*=#]').click(function() {

     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
         && location.hostname == this.hostname) {

             var $target = $(this.hash);

             $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');

             if ($target.length) {

                 var targetOffset = $target.offset().top;

                 $('html,body').animate({scrollTop: targetOffset}, 1000);

                 return false;

                }

           }

       });

    });  

		//BOTON ARRIBA FUNCION
      $('#arriba').click(function(){ //Id del elemento cliqueable
        $('html, body').animate({scrollTop:0}, 'slow');
        return false;
      });
