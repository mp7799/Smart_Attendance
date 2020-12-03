function validate(){
	var first_name = document.forms["query_form"]["first_name"];
	var last_name = document.forms["query_form"]["last_name"];
	var username = document.forms["query_form"]["username"];
	var type_query = document.forms["query_form"]["type_query"];
	var query_type1 = document.forms["query_form"]["query_type1"];
	var query_type2 = document.forms["query_form"]["query_type2"];
	var query_type3 = document.forms["query_form"]["query_type3"];
	var male = document.forms["query_form"]["male"];
	var female = document.forms["query_form"]["female"];
	var other = document.forms["query_form"]["other"];

	if(first_name.value == ""){
		alert("First name cannot be empty");
		first_name.focus();
		return false;
	}
	else{
		var regex = /^[a-zA-Z\s]+$/;
		if(regex.test(first_name.value) == false){
			alert("Enter valid first name");
			first_name.focus();
			return false;
		}
	}

	if(last_name.value == ""){
		alert("Last name cannot be empty");
		last_name.focus();
		return false;
	}
	else{
		var regex = /^[a-zA-Z\s]+$/;
		if(regex.test(last_name.value) == false){
			alert("Enter valid last name");
			last_name.focus();
			return false;
		}
	}

	if(username.value == ""){
		alert("Userame cannot be empty");
		username.focus();
		return false;
	}
	else{
		var regex = /^\S+@\S+\.\S+$/;
		if(regex.test(username.value) == false){
			alert("Enter valid username");
			username.focus();
			return false;
		}
	}

	if(type_query.value == ""){
		alert("Please enter your query");
		type_query.focus();
		return false;
	}
	else{
		var regex = /^[a-zA-Z\s]+$/;
		if(regex.test(type_query.value) == false){
			alert("Enter valid query");
			type_query.focus();
			return false;
		}
	}

	if(query_type1.checked == false && query_type2.checked == false && query_type3.checked == false){
		alert("Please at least check one query type");
		return false;
	}

	if(male.checked == false && female.checked == false && other.checked == false){
		alert("Select your gender");
		return false;
	}

	return true;
}