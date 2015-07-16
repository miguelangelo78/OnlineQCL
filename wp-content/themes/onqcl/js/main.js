function handleFocusBlur(){
	
	$("#incodeArea, #outcodeArea").focus(function(){
		if (this.value === this.defaultValue) {
            this.value = '';
            $(this).css({"color":"white"});
        }
	}).blur(function(){
		if (this.value === '') {
            this.value = this.defaultValue;
            if($(this).attr("id")==="incodeArea")
            	$(this).css({"color":"7B8AAD"});
            else
            	$(this).css({"color":"3A6DE8"});
        }
	});
}

$(function(){
	handleFocusBlur();
	
	$("#titleBrk").animate({"width":"300px"}, 1500, function(){
		$("#nav").animate({backgroundColor:"#DB515F"},500);
	});

});