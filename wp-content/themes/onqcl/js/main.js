
function initialAnimations(){
	$("#titleBrk").animate({"width":"300px"}, 1500);
}

function handle_parallax(){
	$(window).bind('scroll', function(evt){  
		var scrollDY = ($(window).scrollTop())*0.3;
		$("#codeContainer").css({"margin-top":"-"+scrollDY+"px" , "margin-bottom":scrollDY+"px"});
	});
}

$(function(){
	initialAnimations();
	handle_parallax();
	
});