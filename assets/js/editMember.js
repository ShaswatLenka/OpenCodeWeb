/**
 * File : editMember.js 
 * 
 * This file contain the validation of edit Member form
 */
$(document).ready(function(){
	
	var editMemberForm = $("#editMember");
	
	var validator = editMemberForm.validate({
		
		rules:{
			fname :{ required : true },
			email : { required : true, email : true, remote : { url : baseURL + "checkEmailExists", type :"post", data : { MemberId : function(){ return $("#MemberId").val(); } } } },
			cpassword : {equalTo: "#password"},
			mobile : { required : true, digits : true },
			role : { required : true, selected : true}
		},
		messages:{
			fname :{ required : "This field is required" },
			email : { required : "This field is required", email : "Please enter valid email address", remote : "Email already taken" },
			cpassword : {equalTo: "Please enter same password" },
			mobile : { required : "This field is required", digits : "Please enter numbers only" },
			role : { required : "This field is required", selected : "Please select atleast one option" }			
		}
	});
});