// JavaScript Document
var Script = function () {

    $.validator.setDefaults({
        //submitHandler: function() { alert("submitted!"); }
    });
	
	function populateTheNurseryGroupsCategoryOptions(){
		
		$.post('../nursery/nursery_groups_categories_get',{} , function(data){
			$("#nurseryGroupsForm select[name=NURSERY_GROUPS_CATEGORY_ID]").find("option").remove();
			if (data.length == 1) {
               var single = true;
            }else{
                var single = false;
            }
			for (var i = 0; i < data.length; i++) {
                if ((i == 0)&&(!single)) {
                    $("<option/>").attr("value", "").text("Select an option").appendTo($("#nurseryGroupsForm select[name=NURSERY_GROUPS_CATEGORY_ID]"));                   
                };                
                $("<option/>").attr("value", data[i].NURSERY_GROUPS_CATEGORY_ID).text(data[i].NURSERY_GROUPS_CATEGORY_NAME).appendTo($("#nurseryGroupsForm select[name=NURSERY_GROUPS_CATEGORY_ID]"));                                     
            };
			if (single){
                $("#nurseryGroupsForm select[name=NURSERY_GROUPS_CATEGORY_ID] option:first-child").attr("selected", "selected").change();
            }else{
                $("#nurseryGroupsForm select[name=NURSERY_GROUPS_CATEGORY_ID]").val(0).change();
            }; 
		}, "json");
	}

    $().ready(function() {
		
		populateTheNurseryGroupsCategoryOptions();
		
		$("#addNewFormLink").click(function(e) {
			$("#addNewForm").toggle();
			$("#editForm").hide();
        });
		
		$(".editNurseryGroupCategoryLink").live("click", function(){
			
			var NURSERY_GROUPS_CATEGORY_ID = $(this).data("id");
			var NURSERY_GROUPS_CATEGORY_NAME = $(this).data("text");
			$("#editForm").find("input[name='NURSERY_GROUPS_CATEGORY_NAME_EDIT']").val(NURSERY_GROUPS_CATEGORY_NAME);
			$("#editForm").find("input[name='NURSERY_GROUPS_CATEGORY_ID_EDIT']").val(NURSERY_GROUPS_CATEGORY_ID);
			$("#addNewForm").hide();
			$("#editForm").toggle();
			
		});
		
		$("#DeleteNurseryGroupCategoryBtn").click(function(e) {
            var GroupCategoryToBeDeleted = $("#sample_1_wrapper [name='NURSERY_GROUPS_CATEGORY_ID[]']:checked").map(function(){
			  return $(this).val();
			}).get(); // <----
			if(confirm("Are you sure?")){
				$.post('../nursery/nursery_groups_categories_delete',{GroupCategoryToBeDeleted:JSON.stringify(GroupCategoryToBeDeleted)} , function(data){
						
						$.gritter.add({
							// (string | mandatory) the heading of the notification
							title: data.title,
							// (string | mandatory) the text inside the notification
							text: data.msg,
							class_name: data.gritter_type
						});
						if(data.status == "1"){
							location.reload();	
						}
						
				}, "json");
				
			}
        });
        
		$("#saveGroupCategoryBtn").click(function(e) {
			// validate the comment form when it is submitted
			$("#nurseryGroupsCategoriesForm").validate({
				rules: {
					NURSERY_GROUPS_CATEGORY_NAME: {
						required: true,
						minlength: 3
					},
				},
				messages: {
					NURSERY_GROUPS_CATEGORY_NAME: {
						required: "Please enter a category name",
						minlength: "The category name must consist of at least 3 characters"
					},
					
				},
				//perform an AJAX post to ajax.php
                submitHandler: function() {
					$.post('../nursery/nursery_groups_categories_add',$('form#nurseryGroupsCategoriesForm').serialize() , function(data){
						
						$.gritter.add({
							// (string | mandatory) the heading of the notification
							title: data.title,
							// (string | mandatory) the text inside the notification
							text: data.msg,
							class_name: data.gritter_type
						});
						
						//append the new row and append to the table
						$('#sample_1 > tbody:last-child').append(data.latest_row);
						
						
					}, "json");
					//$("#NURSERY_GROUPS_CATEGORY_NAME").val("");
                }
			});
			
        });
		
		$("#saveNurseryGroupBtn").click(function(e) {
			// validate the comment form when it is submitted
			$("#nurseryGroupsForm").validate({
				rules: {
					NURSERY_GROUPS_NAME: {
						required: true,
						minlength: 3
					},
				},
				messages: {
					NURSERY_GROUPS_NAME: {
						required: "Please enter a nursery group name",
						minlength: "The nursery group name must consist of at least 3 characters"
					},
					
				},
				//perform an AJAX post to ajax.php
                submitHandler: function() {
					$.post('../nursery/nursery_groups_add',$('form#nurseryGroupsForm').serialize() , function(data){
						
						$.gritter.add({
							// (string | mandatory) the heading of the notification
							title: data.title,
							// (string | mandatory) the text inside the notification
							text: data.msg,
							class_name: data.gritter_type
						});
						window.location.href = "../nursery/nursery_groups";
						
					}, "json");
					//$("#NURSERY_GROUPS_CATEGORY_NAME").val("");
                }
			});
			
        });
		
		$("#editGroupCategoryBtn").click(function(e) {
			;
			// validate the comment form when it is submitted
			$("#nurseryGroupsCategoriesEditForm").validate({
				rules: {
					NURSERY_GROUPS_CATEGORY_NAME_EDIT: {
						required: true,
						minlength: 3
					},
				},
				messages: {
					NURSERY_GROUPS_CATEGORY_NAME_EDIT: {
						required: "Please enter a category name",
						minlength: "The category name must consist of at least 3 characters"
					},
					
				},
				//perform an AJAX post to ajax.php
                submitHandler: function() {
					$.post('../nursery/nursery_groups_categories_edit',$('form#nurseryGroupsCategoriesEditForm').serialize() , function(data){
						$.gritter.add({
							// (string | mandatory) the heading of the notification
							title: data.title,
							// (string | mandatory) the text inside the notification
							text: data.msg,
							class_name: data.gritter_type
						});
						
						if(data.status == 1){
							location.reload();
						}
						
						
					}, "json");
					//$("#NURSERY_GROUPS_CATEGORY_NAME").val("");
                }
			});
			
        });

    });


}();