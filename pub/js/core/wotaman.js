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
        $("#mustard-filter").change(function(e) {
			$(".mustard-filter").hide();
            switch($(this).val()){
				case "1":
					$("#mustard-location").show();
				break;
				case "2":
					$("#mustard-groups").show();
				break;
				case "3":
					$("#mustard-waterman").show();
				break;
				case "4":
					$("#mustard-nursery").show();
				break;
			}
			
        });
		
		$("#todo-add").click(function(e) {
			$("#todo-form").find("input, select, textarea").val("");
			SMSinit();
            $(".todo-list").slideUp();
			$("#todo-form").slideDown();
        });
		$("a.closeTheToDoAddForm").click(function(e) {
            $(".todo-list").slideDown();
			$("#todo-form").slideUp();
        });
		$("a.submitTheToDoAddForm").click(function(e) {
            var html = "<li><a href='#' class='check-link'><i class='icon-unchecked'></i> </a><span class='m-l-xs'>"+$("#todoDescription").val()+"</span></li>";
			$(".todo-list").append(html);
			$(".todo-list").slideDown();
			$("#todo-form").slideUp();
        });
		$("#visits-add").click(function(e) {
			
			$("#visits-form").find("input, select, textarea").val("");
			//SMSinit();
            $(".visits-list").slideUp();
			$("#visits-form").slideDown();
        });
		$("a.closeTheVisitsAddForm").click(function(e) {
            $(".visits-list").slideDown();
			$("#visits-form").slideUp();
        });
		$("a.submitTheVisitsAddForm").click(function(e) {
            var html = '<div class="media innerAll padded-bottom margin-none" style="padding-left:10px;position:relative;"><a class="pull-left thumb"><img src="http://placehold.it/60x60"></a><div class="media-body"><a href="#" class="strong text-success"><i class="icon-circle"></i>Jane Smith</a><div class="clearfix"></div><em>10:20AM - 23 Oct, 2014</em></div></div><hr class="margin-none"/>';
			$(".visits-list").append(html);
			$(".visits-list").slideDown();
			$("#visits-form").slideUp();
        });
		$("#issues-add").click(function(e) {
			
			$("#issues-form").find("input, select, textarea").val("");
			//SMSinit();
            $("#issues-list").slideUp();
			$("#issues-form").slideDown();
        });
		$("a.closeTheIssuesAddForm").click(function(e) {
            $("#issues-list").slideDown();
			$("#issues-form").slideUp();
        });
		$(".list li").click(function(e) {
            $("#load-area-for-view-each").show();
			$("#load-area-for-view").hide();
        });
		$("#reopen-general-wotaman").click(function(e) {
            $("#load-area-for-view-each").hide();
			$("#load-area-for-view").show();
        });
		$("#location-switch").click(function(e) {
            $("#locations-map").show();
			$("#locations-list").hide();
			$(this).hide();
			$("#location-switch-back").show();
        });
		$("#location-switch-back").click(function(e) {
            $("#locations-map").hide();
			$("#locations-list").show();
			$(this).hide();
			$("#location-switch").show();
        });
		/*$("#todoDescription").characterCounter({
		  limit: '25',
		  counterWrapper: 'span',
		  counterCssClass: 'todo-counter',
		  onExceed: function(){
            	$('#todoDescription').val($('#todoDescription').val().substring(0,24));
          },
		});*/
    });
	
}();