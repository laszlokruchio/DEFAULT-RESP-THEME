// On Ready
$( document ).ready(function() {
	
	// Slider 
	$('.shop_slides').bxSlider({
		mode : 'fade',
		pager : false,
		speed : 2000,
		pause : 6000,
		auto : true,
		controls : false
	});
	
	// Mobile menu trigger
	$('.mobile_menu_btn').click(function(){
		$('.menu-header-wrapper').toggleClass('open');
	});
	
	// Tabs
	$('.tabs_head li').click(function(){
	    var clicked_tab = $(this);
	    var number = clicked_tab.index();
	    number = number + 1;
	    //console.log(number);
	   
	    $('.tabs_head li').removeClass('active');
	    clicked_tab.addClass('active');
	   
	    $('.tabs_content li').removeClass('show');
	    $('.tabs_content li:nth-child(' + number + ')').addClass('show');
	});
		
});

// On Load
$(window).load(function(){
	
	// Set Content Page's minimum height bigger than Sidebar's height
	var sidebar = $('#sidebar').height();
	$('#content').css('min-height', sidebar + 120);
	
});