<!DOCTYPE html>
<html dir="rtl"><meta charset="UTF-8">
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>
	<body>
		<?php
			$servername = "itaile.mtacloud.co.il";
			$username = "itaile";
			$password = "6T1&utHI#E";
			$dbname = "login_DB";

			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);} 

			$sql = "SELECT username, firstname, lastname, password, phone, email FROM myMembers";
			$result = $conn->query($sql);

			$uname=$_POST["uname"];
			$fname=$_POST["fname"];
			$lname=$_POST["lname"];
			$pword=$_POST["pword"];
			$phone=$_POST["phone"];
			$email=$_POST["email"];
			
			$sql2="INSERT INTO myMembers (username, firstname, lastname, password, phone, email) VALUES ('".$uname."','".$fname."','".$lname."','".$pword."','".$phone."','".$email."')";
			$conn->query($sql2);
			$conn->query($sql3); 
			$result = $conn->query($sql);

			$conn->close();
		?>
		<script>
			$(document).ready(function(){
				var r = confirm("ברוכים הבאים לעמוד קביעת תור.");
				if (r == true) {
					window.open("set_appointment.html");}
				else {
					window.open("set_appointment.html");}				
			})
		</script>	
	</body>
</html>
