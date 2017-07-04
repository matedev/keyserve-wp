(function($){


	$(document).ready(function(){

		$('.fading-box .details.block').fadeOut(0);
		$('#page-partners .references-box ul').each(function(){
			$(this).addClass('col-md-4');
			$(this).find('li a').each(function(){
				$(this).attr('target', '_blank');
			});
		});
		$('.owl-carousel').owlCarousel({
		    loop:false,
		    margin:30,
		    nav:true,
		    dots: false,
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:3
		        },
		        1000:{
		            items:4
		        }
		    },
		    navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>']
		});

		$('#nav-icon3').click(function(){
			$(this).toggleClass('open');
		});

		$(".to-detail-btn").click(function(e){
			var rootBox = $(this).closest('.fading-box');
			var introBox = rootBox.find('.intro').first();
			var overLayBox = introBox.find('.animation.translate').first();
			var detailBox = rootBox.find('.details').first();
			showDetails(rootBox, introBox, overLayBox, detailBox);
		});

		$(".to-intro-btn").click(function(e){
			var rootBox = $(this).closest('.fading-box');
			var introBox = rootBox.find('.intro').first();
			var overLayBox = introBox.find('.animation.translate').first();
			var detailBox = rootBox.find('.details').first();		
			showIntro(rootBox, introBox, overLayBox, detailBox);
		});
	});

	var $cog = $('#cog'),
	    $body = $(document.body),
	    bodyHeight = $body.height();

	$(window).scroll(function () {
	    $('.hexagon').css({
	        'transform': 'rotate(' + ($body.scrollTop() / bodyHeight * 360) + 'deg)'
	    });
	});

	function showDetails(rootBox, introBox, overLayBox, detailBox){
		var dir = 0;
		if (overLayBox.hasClass('to-right')){
			dir = 100;
		}else{
			dir = -100;
		}
		overLayBox.css({
			  '-webkit-transform' : 'translateX(' + dir + '%)',
			  '-moz-transform'    : 'translateX(' + dir + '%)',
			  '-ms-transform'     : 'translateX(' + dir + '%)',
			  '-o-transform'      : 'translateX(' + dir + '%)',
			  'transform'         : 'translateX(' + dir + '%)'
		});

		detailBox.css({ opacity: 1 });
		introBox.css({ opacity: 0 });

		setTimeout(function(){
			introBox.fadeOut(0);
			detailBox.fadeIn(800);
		}, 800);
	}

	function showIntro(rootBox, introBox, overLayBox, detailBox){
		detailBox.css({ opacity: 0 });
		detailBox.fadeOut(200);
		introBox.fadeIn(0);
		introBox.css({ opacity: 1 });
		/*$('#page-index #fadein').css({ opacity: 0 });
		$('#page-index #fadein').fadeOut(200);
		$('#page-index #block2').fadeIn(0);
		$('#page-index #block2').css({ opacity: 1 });*/
		overLayBox.css({
		  '-webkit-transform' : 'translateX(0)',
		  '-moz-transform'    : 'translateX(0)',
		  '-ms-transform'     : 'translateX(0)',
		  '-o-transform'      : 'translateX(0)',
		  'transform'         : 'translateX(0)'
		});
	}

})(jQuery);