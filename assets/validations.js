function validateForm(){
	var form = document.getElementById("regLog_form");
	var len = form.elements.length;
	for(var i = 0; i < len; ++i){
		var field = form.elements[i];
		if(field.name == "username"){
			var fld_content = field.value;
			if(fld_content.length == 0){
				field.style["background-color"] = "green";
				alert("You cannot leave \"username\" blank!");
				field.style["background-color"].remove();
				field.focus();
				return false;
			}	
		} else if(field.name == "pass"){
			var fld_content = field.value;
			if(fld_content.length == 0){
				field.style["background-color"] = "green";
				alert("You cannot leave \"password\" blank!");
				field.style["background-color"].remove();
				field.focus();
				return false;
			}	
		} else if(field.name == "pass_confirm"){
			var fld_content = field.value;
			if(fld_content.length == 0){
				field.style["background-color"] = "green";
				alert("You cannot leave any field blank!");
				field.style["background-color"].remove();
				field.focus();
				return false;
			}
			if(fld_content != form.elements["pass"].value){
				alert("The 2 passwords do not match. Please re-enter your passwords.");
				field.focus();
				return false;
			}
		} else if(field.name == "email_id") {
			var fld_content = field.value;
			if(fld_content.length == 0){
				field.style["background-color"] = "green";
				alert("You cannot leave any field blank!");
				field.style["background-color"].remove();
				field.focus();
				return false;
			}
		}
	}
	return true;
}