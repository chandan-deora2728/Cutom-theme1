function demoform() {
	name = $('input[name="name"]').val();
	Surname = $('input[name="Surname"]').val();
	Email = $('input[name="Email"]').val();
	Subject = $('input[name="Subject"]').val();
	message = $('Textarea[name="message"]').val();
	
	$("#e1").html("");
	if(name=="") {
		$("#e1").html("Please enter your name");
		$('input[name="name"]').focus();
		return false;
	} else if(name!="") {
		regEx = /^[a-zA-Z ]*$/;
		if(!regEx.test(name)) {
			$("#e1").html("Please enter Alphabetical value only.");
			$('input[name="name"]').focus();
			return false;
		}
	}
	
	$("#e1").html("");
	if(Surname=="") {
		$("#e1").html("Please enter your Surname");
		$('input[name="Surname"]').focus();
		return false;
	} else if(Surname!="") {
		regEx = /^[a-zA-Z ]*$/;
		if(!regEx.test(Surname)) {
			$("#e1").html("Please enter Alphabetical value only.");
			$('input[name="Surname"]').focus();
			return false;
		}
	}
	
	$('#e3').html("");
	if(Email=="") {
		$("#e1").html("Please enter your Email ID");
		$('input[name="Email"]').focus();
		return false;
	} else if(Email!="") {
		regEx = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		if(!regEx.test(Email)) {
			$("#e1").html("Please enter Valid Email Address.");
			$('input[name="Email"]').focus();
			return false;
		}
	}
	
	$('#e1').html("");
	if(Subject=="") {
		$("#e1").html("Please enter your Subject");
		$('input[name="Subject"]').focus();
		return false;
	}
	
	$('#e1').html("");
	if(message=="") {
		$("#e1").html("Please enter your Message");
		$('Textarea[name="message"]').focus();
		return false;
	}
	
	alert("Your Response had been recorded."); 
}