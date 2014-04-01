$().ready(function () {

	$("input:submit").click(function () {

		//get form element values
		var nameVal = $("#name").val();
		var emailVal = $("#email").val();
		var commentsVal = $("#comments").val();

		//regex
		var regEmail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

		//check for empty fields
		if (nameVal === "") {
			$("#name").addClass("required");
			alert("Name Required");
			return false;
		}
		if (emailVal === "") {
			$("#email").addClass("required");
			alert("Email Required");
			return false;
		}
		if (commentsVal === "") {
			$("#comments").addClass("required");
			alert("Comments Required");
			return false;
		}

		//validate email regex
		if (regEmail.test(emailVal) === false) {
			alert("Invalid Email Address Format");
			return false;
		}

		return true;
	});
});