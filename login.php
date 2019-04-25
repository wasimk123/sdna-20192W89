 <?php
			$servername = "itaile.mtacloud.co.il";
			$username = "itaile";
			$password = "6T1&utHI#E";
			$dbname = "login_DB";

			mysql_connect("localhost" , "itaileis_demo1" , "number!@#") or die ("\n::=> NO CONNECTION");
			mysql_select_db("itaileis_demo") or die ("\n::=> DATABASE NAME NOT FOUND");
			
			if(isset ($_POST ['btn_log'])){
				$uname = $_POST['unametxt'];
				$pwd = $_POST['pwdtxt'];
				
				$sql = mysql_query("SELECT * FROM user WHERE username='$uname' AND password='$pwd'");
				
				$cout = mysql_num_rows($sql);
				
				if ($cout>0){
					$row=mysql_fetch_array($sql);
					
					if($row['type'] == 'admin'){
						echo "LOGIN FAILED";
					}
					else{
						header("location: home.html");
					}
				}
				else{
					echo "LOGIN FAILED";
				}
			}


		?>

<!DOCTYPE html>
<html dir="rtl"><meta charset="UTF-8">
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>
	<body>
		<form method="post">
			<input type="text" name="unametxt" placeholder="user name" /><br>
			<input type="password" name="pwdtxt" placeholder="password" autocomplete="off" /><br>
			<input type="submit" name="btn_log" value="LOGIN" />
		</form>
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
