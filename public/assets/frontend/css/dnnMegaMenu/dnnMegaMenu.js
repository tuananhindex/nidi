jQuery(document).ready(function ($) {

	//On Hover Over
	function megaHoverOver() { 
		$(this).addClass('dnnHover').find(".MegaSub").stop().show();
		setDimensions($(this));			
	}

	//On Hover Out
	function megaHoverOut() {
		$(this).removeClass('dnnHover').find(".MegaSub").stop().fadeOut('fast', function () {
		  $(this).hide();
		});
	}
	
	//Set dimensions of the dropdown
	function setDimensions(obj) {	
		maxWidth = 0;
		maxHeight = 0;
		numColumns = 0;
		maxColumns = 2; // set to desired number of colummns
		//Calculate widest category
		obj.find("li.category").each(function () { //for each ul...
			numColumns++;
			maxWidth = ($(this).width() > maxWidth) ? $(this).width() : maxWidth; //Check current category width against largest width
		});
		maxWidth = (numColumns > maxColumns) ? (maxWidth * maxColumns) : (maxWidth * numColumns);
							
		//Calculate tallest category
		obj.find("li.category").each(function () { //for each ul...					
			maxHeight = ($(this).height() > maxHeight) ? $(this).height() : maxHeight; //Check current category height against largest height
		});

		obj.find(".MegaSub").css({ 'width': maxWidth + 15 }); //Set Width
	}
	
	//Set custom configurations
	var config = {
		sensitivity: 2, // number = sensitivity threshold (must be 1 or higher)
		interval: 200, // number = milliseconds for onMouseOver polling interval
		over: megaHoverOver, // function = onMouseOver callback (REQUIRED)
		timeout: 200, // number = milliseconds delay before onMouseOut
		out: megaHoverOut // function = onMouseOut callback (REQUIRED)
	};

	//Trigger Hover intent with custom configurations
	$("ul.MegaRoot li.dnnHasChild").hoverIntent(config);	
	
	//Trigger Touch Start event
	var firstTouch = true;
	$("ul.DNNMega li.dnnHasChild").bind("touchstart", 
			function(){		
				if (firstTouch){
					firstTouch = false;
					setDimensions($(this));				
					$(this).find(".MegaSub").stop().show(); //Find sub and fade it in
					return false;
				}
			}
		);
});