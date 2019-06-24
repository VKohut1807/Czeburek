$("#sendMail").on("click", function(){
	var firstName = $("#firstName").val().trim();
	var lastName = $("#lastName").val().trim();
	var email = $("#email").val().trim();
	var message = $("#message").val().trim();

	if (firstName == "") {
		$("#errorMessage").text("Podaj swoje imię")
		return false;
	} else if (lastName == "") {
		$("#errorMessage").text("Podaj swoje Nazwisko")
		return false;
	} else if (email == "") {
		$("#errorMessage").text("Podaj swój email")
		return false;
	} else if (message.length < 5) {
		$("#errorMessage").text("Napisz swoje pytanie (nie mniej jak 5 znaków!) ")
		return false;
	}

	$("#errorMessage").text("");

	console.log(firstName);
	console.log(lastName);
	console.log(email);
	console.log(message);

	$.ajax({
		url: "ajax/mail.php",
		type: "POST",
		cache: false,
		data: {"firstName": firstName, "lastName": lastName, "email": email, "message": message},
		dataType: "html",
		beforeSend: function(){
			$("#sendMail").prop("disabled", true);
			},
		success: function(data, second, third){
			if (!data) {
				alert("Błąd, nie udało się wysłać wiadomości");
			} else {
				$("#mailForm").trigger("reset");
			}
			$("#sendMail").prop("disabled", false);
		}
	});
});