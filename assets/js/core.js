jQuery(function(){ 
	jQuery(".publicaciones").hover(function(){
		jQuery(this).find(".slideup").stop().animate({ top: '-225px' },{ duration: 300 });
	},function(){
		jQuery(this).find(".slideup").stop().animate({ top: '0px' },{ duration: 300});
	});
});


jQuery(window).scroll(function(){
    if(jQuery(document).scrollTop() > 250)
    {
       jQuery('.box-titulo').stop().animate({opacity : .9}, 300)
	   jQuery('.box-nav').stop().css( 'backgroundColor', 'rgba(50,50,50,1)')
    }
    else
    {
       jQuery('.box-titulo').stop().animate({opacity : .7}, 300)
	   jQuery('.box-nav').stop().css( 'backgroundColor', 'rgba(50,50,50,.9)')
    }
});