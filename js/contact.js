$(document).ready(function(){	
	$("#contactForm").submit(function(event){
		submitForm();
		return false;
	});
	
	$("#contactForm2").submit(function(event){
		submitForm2();
		return false;
	});
	
	$("#contactForm3").submit(function(event){
		submitForm3();
		return false;
	});
});
// function to handle form submit
function submitForm(){
	 $.ajax({
		type: "POST",
		url: "saveContact.php",
		cache:false,
		data: $('form#contactForm').serialize(),
		success: function(response){
			$("#contact-1").html(response)
			$("#contact-modal-1").modal('hide');
			$("#contact-1").addClass('alert');
			$("#contact-1").addClass('alert-success');
		},
		error: function(){
			alert("Error");
		}
	});
}
// function to handle form submit2
function submitForm2(){
	 $.ajax({
		type: "POST",
		url: "saveContact.php",
		cache:false,
		data: $('form#contactForm2').serialize(),
		success: function(response){
			$("#contact-2").html(response)
			$("#contact-modal-2").modal('hide');
			$("#contact-2").addClass('alert');
			$("#contact-2").addClass('alert-success');
		},
		error: function(){
			alert("Error");
		}
	});
}
// function to handle form submit2
function submitForm3(){
	 $.ajax({
		type: "POST",
		url: "saveContact.php",
		cache:false,
		data: $('form#contactForm3').serialize(),
		success: function(response){
			$("#contact-3").html(response)
			$("#contact-modal-3").modal('hide');
			$("#contact-3").addClass('alert');
			$("#contact-3").addClass('alert-success');
		},
		error: function(){
			alert("Error");
		}
	});
}