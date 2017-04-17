(function($) {
$(document).ready( function(){
		
		  $('.navig li').click(function(){	
				$('.navig2').hide();
				$('.submenu').not($(this).find('.submenu')).hide();
				$(this).children('.submenu').toggle();
		  });
		  
         /* $('.navig li').hover(function(){	
				$('.navig2').hide();
				$('.submenu').not($(this).find('.submenu')).hide();
				$(this).children('.submenu').toggle();
		  });	  */
			
			$('.contact2 a').click(function(){	
		        $('.blocknews').hide();
				$('.formnews').show();
				$('.priedn').addClass('gallery');
				
		   });	
		   $('.contact1 a').click(function(){	
		        $('.blocknews').hide();
				$('.mailnews').show();
				$('.priedn').addClass('gallery');
		   });	
		   
		   
		   $('#cboxClose3').click(function(){	
		        $('.blocknews').show();
				$('.formnews').hide();
				$('.priedn').removeClass('gallery');
				
		   });	
		   $('#cboxClose4').click(function(){	
		        $('.blocknews').show();
				$('.mailnews').hide();
				$('.priedn').removeClass('gallery');
		   });	
		   
		   
		   
		   $('.lipa').click(function(){	
		        $('.submenu').hide();
				$(".navig2").toggle();
		   });	
		   
		   $('.clicker').click(function(){	
		        $(this).hide();
		   });	
		   
		   $('#carousel_photo .caption').hover(
			function(){
			  $(this).children('.caption').css('display','table');
			},
			function(){
			  $(this).children('.caption').css('display','none');
			});
			
			$('#carousel3 .item div').hover(
			function(){
			  $(this).children('.carousel-modal').css('display','table');
			},
			function(){
			  $(this).children('.carousel-modal').css('display','none');
			});
			
			
			$('.deplead').hover(
			function(){
				$('.deplead').css('opacity','0.5');
				$(this).css('opacity','1');
			},
			function(){
			   $('.deplead').css('opacity','1');
			});
			
			$('.deplead1').hover(
			function(){
			  $('.dep-descr.dep1').show();
			  $('.dep-descr.dep2').hide();
			  $('.dep-descr.dep3').hide();
			},
			function(){
			  //$('.dep-descr.dep1').hide();
			});
			$('.deplead2').hover(
			function(){
			  $('.dep-descr.dep2').show();
			  $('.dep-descr.dep1').hide();
			  $('.dep-descr.dep3').hide();
			},
			function(){
			  //$('.dep-descr.dep2').hide();
			});
			$('.deplead3').hover(
			function(){
			  $('.dep-descr.dep3').show();
			  $('.dep-descr.dep2').hide();
			  $('.dep-descr.dep1').hide();
			},
			function(){
			  //$('.dep-descr.dep3').hide();
			});
			
			$('.modalmode').click(function(){	
				$(".modalokno").toggle();
		   });	
		   $('.contact3 a').click(function(){	
				$(".modalokno").toggle();
		   });	
            $('.modalokno').click(function(){	
				//$(this).hide();
		   });	
		   
		   $('#cboxClose2').click(function(){	
		        $(".modalokno").hide();
		   });	
		   
		   
		   
		});	

})(jQuery);