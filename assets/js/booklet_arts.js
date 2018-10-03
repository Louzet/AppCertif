$(document).ready(function(){


	$('#mybook').booklet({
		width: 900,
		height: 500,
		closed: false,
		closedFrontChapter: "Start of Book",
		pageBorder: 5,
		easing: "easeInOutExpo",
		autoCenter: true
	});

	$('.b-wrap').css('width', '450');
	$('.b-wrap').css('height', '500');


	$('#mybook').css('border', '1px solid #c4c4c4', '!important');
	$('#mybook').css('line-height', '1.5rem');

	$('#mybook').css('margin', '0 auto');
	$('#mybook').css('font-size', '12px');
});
