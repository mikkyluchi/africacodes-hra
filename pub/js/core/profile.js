// JavaScript Document
var Script = function () {
	var SMSlength = 25;
	
	function SMSinit(){
		$(".counter").each(function(){
			countSMSChars($(this));
		});
	};
	function countSMSChars(SMStextbox){
		var elem = SMStextbox.parent().find(".todo-counter");
		rem = SMSlength - SMStextbox.val().length;
		elem.text(rem);    
	};
	
	$(document).ready(function(e) {
		SMSinit();
		$('.counter').on("input", function(){
			if ($(this).val().length <= SMSlength){
				countSMSChars($(this));
			}else{
				$(this).val($(this).val().substring(0, SMSlength));
			}
		});
        $("#absense-filter").change(function(e) {
			console.log($(this).val())
			$(".absense-filter").hide();
            switch($(this).val()){
				case "1":
					$(".category-filter").show();
				break;
				case "2":
					$(".start-date-filter").show();
				break;
				case "3":
					$(".end-date-filter").show();
				break;
				case "4":
					$(".duration-filter").show();
				break;
				default:
					$(".absense-filter").hide();
				break;
			}
			
        });
	});
	
}();