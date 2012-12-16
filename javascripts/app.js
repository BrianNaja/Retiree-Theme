$(document).ready(function ($){

/*Maps Page**********************************************************/

	$(".mobile_menu_btn").click(function(){  /*Mobile Menu Drop-Down*/
	  $(".mobile_menu").slideToggle("slow");
	});
 
	$(".entry").fitVids();

	function insertValue() {
		var selectValue = $("#end").val();
		$(".open-google-maps").attr("href", "http://maps.apple.com/maps?q="+selectValue+"&t=h&z=16&iwloc=A");
			}
			 	
		$(function(){ $("#end").change(insertValue);
			insertValue();
		});	
 
/*Maps Page**********************************************************/ 
 
/*Slide Show**********************************************************/ 
     	  
	$(function(){ /*Home Page Slide Show*/
	    $('.fadein img:gt(0)').hide();
	    setInterval(function(){
	      $('.fadein :first-child').hide()
	         .next('img').fadeIn("slow")
	         .end().appendTo('.fadein');}, 
	      6000);
	});     	  
	    
	$(function(){ /*Photo's Page Slide Show*/
	    $('.featured_fadein1 img:gt(0)').hide();
	    setInterval(function(){
	      $('.featured_fadein1 :first-child').hide()
	         .next('img').fadeIn("slow")
	         .end().appendTo('.featured_fadein1');}, 
	      6000);
	});
	
	$(function(){ /*Photo's Page Slide Show*/
	    $('.featured_fadein2 img:gt(0)').hide();
	    setInterval(function(){
	      $('.featured_fadein2 :first-child').hide()
	         .next('img').fadeIn("slow")
	         .end().appendTo('.featured_fadein2');}, 
	      6000);
	});

/*Slide Show**********************************************************/	
	

});

(function(window, PhotoSwipe){
	document.addEventListener('DOMContentLoaded', function(){
				var
					options = {},
					instance = PhotoSwipe.attach( window.document.querySelectorAll('#Gallery a, .Gallery dt a, .gallery a'), options );
			}, false);			
		}(window, window.Code.PhotoSwipe));