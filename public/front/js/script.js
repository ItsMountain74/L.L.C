$(document).ready(function(){
    $('#navbar-toggler').click(function(){
        $('.navbar-collapse').slideToggle(400);
    });
});

$(window).scroll(function(){
    let pos = $(window).scrollTop();
    if(pos >= 100)
    {
        $('.navbar').addClass('cng-navbar');
    } else{
        $('.navbar').removeClass('cng-navbar');
    }
})
//video
$(document).ready(function() {
	$('.popup-youtube').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,

		fixedContentPos: false
	});
    $('.team .owl-carousel').owlcarousel({
        loop:true,
        margin:10,
        autoplay:true,
        dots:true,
        

    })
});