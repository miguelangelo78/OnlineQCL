
function initialAnimations(){
	$("#titleBrk").animate({"width":"300px"}, 1500);
}

function handle_parallax(){
	$(window).bind('scroll', function(evt){  
		var scrollDY = ($(window).scrollTop())*0.3;
		$("#codeContainer").css({"margin-top":"-"+scrollDY+"px" , "margin-bottom":scrollDY+"px"});
	});
}

function ajax(callback, data){
	$.ajax({
		url: "static/qcl_handle.php",
		type: 'POST',
		data: data,
		success: function(data){callback(data, false);},
		error: function(err){callback(err, true);}
	});
}

$(function(){
	initialAnimations();
	handle_parallax();
	
	$("#clrBtn").click(function(){
		outCode.setValue("");
	});
	
	$("#runBtn").click(function(){
		try{
			var json = {"code" : inputCode.getValue()};
			ajax(function(data){
				var data_json = JSON.parse(data);
				
				outCode.setValue(data_json["code_output"], 1);
				console.log(data);
			}, json);
		}catch(err){
			console.log("<b>Exception</b>: "+err);
		}
	});
	
});