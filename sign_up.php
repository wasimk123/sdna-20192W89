 <?php
			$host_name='localhost';
			$user_db='itaileis_root';
			$user_db_password='admin';
			$db_name='itaileis_mediate_DB';
			
            $con = mysql_connect("localhost" , "itaileis_root" , "admin");
            
            if(!$con){
                echo 'NOT CONNECTED TO SERVER';
            }
            
            if(!mysql_select_db('itaileis_mediate_DB')){
                echo 'DATABASE NOT SELECTED';
            }

		// GET INPUT WHEN 'BTN_LOG' IS CLICKED TO SUBMIT 
		if(isset ($_POST ['btn_log'])){
			$user_name = $_POST['user_name'];
			$user_password = $_POST['user_password'];
			$user_email = $_POST['user_email'];
			$user_first_name = $_POST['user_first_name'];
			$user_last_name = $_POST['user_last_name'];
			$user_telephone = $_POST['user_telephone'];

		//SQL COMMQND
			$sql = "INSERT INTO `user` (`user_name`, `user_password`, `user_email`, `user_first_name`, `user_last_name`, `user_telephone`) VALUES ('$user_name', '$user_password', '$user_email', '$user_first_name ', '$user_last_name', '$user_telephone');";

			if(!mysql_query($sql)){
				echo 'NOT INSERTED';
			}
			else{
				echo 'INSERTED SUCCESSFULLY';
			}
			header("refresh:2; url = home.html");
		}

?>

<!DOCTYPE html>
<html dir="rtl"><meta charset="UTF-8">
<head>

<!-- The viewport is the user's visible area of a web page -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- link html file to css style sheet -->
<link rel="stylesheet" type="text/css" href="css.css">

<!-- link to .js file-->
<script src="js.js">
</script>

<title>יעקב כהן - משרד גישור</title>
</head>

<body>

<nav>
      <ul>
        <li><a href="home.html">דף בית</a></li>
		<li><a href="set_meeting.html">קבע פגישה</a></li>
        <li><a href="sign_up.php">הרשמה</a></li>
        <li><a href="tv.html">ראיונות ופסקי דין</a></li>
		<li><a href="about.html">אודותינו</a></li>
		<li><a href="mailto:mediate@gmail.com">צור קשר</a></li>
      </ul>
    </nav>

<aside></aside>

<main>
<h1 style="text-align:center;">הרשמה</h1><br>
<h2 style="text-align:center;">** נא להזין פרטים באנגלית **</h2>
        <div class="col-4"></div>
        
        <div class="col-4" style="text-align:center;">
		    <form method="post">
			<input type="text" name="user_name" placeholder="שם משתמש" /><br>
			<input type="password" name="user_password" placeholder="סיסמא" /><br>
			<input type="text" name="user_email" placeholder="אימייל" /><br>
			<input type="text" name="user_first_name" placeholder="שם פרטי" /><br>
			<input type="text" name="user_last_name" placeholder="שם משפחה" /><br>
			<input type="text" name="user_telephone" placeholder="מספר טלפון" /><br><br>
			<input type="submit" name="btn_log" value="SIGN UP" />
			<input type="reset" value = "CLEAR">
		    </form>
		</div>
		
	    <div class="col-4">
	    
	    </div>
	
</main>

<footer></footer>

</body>
</html>