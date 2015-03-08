function slideSwitch(){
	console.log("inside slider");	
	//get top image
	var $active = $('#slider div.active');
	
	
	if ( $active.length == 0 ) $active = $('#slider div:last');

	//get the next image in the list
	var $next;
	if($active.next().length){
		$next = $active.next();
	}
	else{
		$next = $('#slider div:first')
	}
	
	//change the zindex of active to be one less
	$active.addClass('last-active');
        
	//change the opacity of active to 0
	$active.animate({opacity:0.0},1000);
	
	//set the opacity of next to 0
    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
		
	
	
}

