// JavaScript Document// JavaScript Document
var Script = function () {
	
	$(document).ready(function(e) {
		$("[data-toggle=popover]").popover({
			html: true, 
			trigger : 'click',
			content: function() {
				
				return $('#popover-content').html();
			}
		});
		  //Mustard filter
		  $("#mustard-timeline-filter").change(function(e) {
			var filter = $(this).val();
			if(filter != "Select..."){
				
				switch(filter){
					
					case "1":
						$(".mustard-timeline-filter").hide();
						$("div#mustard-timeline-filter-date").show();
					break;
					case "2":
						$(".mustard-timeline-filter").hide();
						$("div#mustard-filter-waterman").show();
					break;
					default:
						$(".mustard-timeline-filter").hide();
					break;
				}
			}
		});
    });
	
	//chosen select
	$(".chzn-select").chosen(); $(".chzn-select-deselect").chosen({allow_single_deselect:true});
	
	//-----------------------------------------
	  $("#critical-slider").owlCarousel({
		autoPlay: 3000,
		items : 2,
		itemsDesktop : [1199,4],
		itemsDesktopSmall : [979,3],
		itemsTablet: [600,2],
		stopOnHover : true,
		navigation : true,
	  });
	
	$("#shallow_search_hide,#deep_search_hide").click(function(e) {
        $("#shallow-search").toggle();
		$("#deep-search").toggle();
    });
	
	
		
	  
	//Timeline filter
	  $("#timeline-filter").change(function(e) {
        var filter = $(this).val();
		if(filter != "Select..."){
			
			switch(filter){
				
				case "1":
					$(".timeline-filter").hide();
					$("div#timeline-filter-date").show();
				break;
				case "2":
					$(".timeline-filter").hide();
					$("div#timeline-filter-waterman").show();
				break;
				case "3":
					$(".timeline-filter").hide();
					$("div#timeline-filter-mustard").show();
				break;
				default:
					$(".mustard-filter").hide();
				break;
			}
		}
    });
	

	//Mustard filter
	  $("#waterman-online-filter").change(function(e) {
        var filter = $(this).val();
		if(filter != "Select..."){
			
			switch(filter){
				
				case "1":
					$(".waterman-filter").hide();
					$("div#waterman-location").show();
				break;
				case "2":
					$(".waterman-filter").hide();
					$("div#waterman-groups").show();
				break;
				case "3":
					$(".waterman-filter").hide();
					$("div#waterman-mustard").show();
				break;
				default:
					$(".waterman-filter").hide();
				break;
			}
		}
    });
	//============================================
	$("#filter-waterman-groups").change(function(e) {
		$('#Container-Waterman').mixItUp('destroy');
		$('#Container-Waterman').empty();
		$('#Container-Waterman').append("<img  class='mix category-2' data-myorder='1' src='../pub/img/avatar1.jpg' alt=''><img  class='mix category-2' data-myorder='1' src='../pub/img/avatar2.jpg' alt=''><img  class='mix category-2' data-myorder='1' src='../pub/img/avatar3.jpg' alt=''>");
		$('#Container-Waterman').mixItUp();
      
    });
	$("#waterman-location").change(function(e) {
		$('#Container-Waterman').mixItUp('destroy');
		$('#Container-Waterman').empty();
		$('#Container-Waterman').append("<img  class='mix category-2' data-myorder='1' src='../pub/img/avatar1.jpg' alt=''><img  class='mix category-2' data-myorder='1' src='../pub/img/avatar2.jpg' alt=''><img  class='mix category-2' data-myorder='1' src='../pub/img/avatar3.jpg' alt=''>");
		$('#Container-Waterman').mixItUp();
      
    });
}();