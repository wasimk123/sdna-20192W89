<?php 
mysql_connect("localhost","itaileis_admin","admin") or die ("No Connection"); 
mysql_select_db("itaileis_myMembers") or die ("No Database Name");
	
	$msg="";
	if (isset ($_POST['btn_log']))
	{
		$uname=$_POST['unametxt'];
		$pword=$_POST['pwordtxt'];
		
		$sql=mysql_query("SELECT * FROM myMembers WHERE uname=='$uname' AND pword='$pword'");
		$cout=mysql_num_rows($sql);
		if ( $cout>0 )
		{
			$row = mysql_fetch_array($sql);
			if ($row['type'] == 'admin')
				$msg = "Failed";
		}
		else
			header("location:employee_landing_page.html");
	}
?>
<!DOCTYPE html>
<html lang="He" dir="rtl">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<!-- The viewport is the user's visible area of a web page -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- link html file to css style sheet -->
<link rel="stylesheet" type="text/css" href="login.css">

<!-- link to js file -->
<script src ="js.js"></script>
<title>יעקב כהן - משרד גישור</title>
</head>

<body>

<nav>
      <ul>
        <li onclick="clk_home()">דף בית</li>
        <li><a href="set_appointment.html">קבע פגישה</a></li>
        <li><a href="login.html">הרשמה</a></li>
        <li><a href="tv.html">ראיונות ופסקי דין</a></li>
        <li><a href="about.html">אודותינו</a></li>
		<li><a href="mailto:mediator@gmail.com">צור קשר</a></li>
      </ul>
    </nav>

<aside class="col-3"></aside>

<main>
  <form method="post">
	<fieldset>
		<fieldset></fieldset>
		<div id="login_back">
			<div id="msg">
			
			</div>
			<div id="login_form">
				<label for="login">Username:</label>
				<input type="text" class= "fields" name="unametxt" title="Enter Username Here: ">
				<div class="clear"></div>
				<label for="login">Password:</label>
				<input type="password" class="fields" name="pword" title="Enter Password Here: " autocomplete="off">
				<div class="clear"></div>
				<div id="space_div"></div>
				<input type="submit" class="button" name="btn_log" value="Log in">
			</div>
			</div>
			</fieldset>

  </form>
  <h2 style= "color:#00F;" align="center">
  <? php echo $msg; ?>
  </h2>
</main>

<footer></footer>

</body>

</html>

</html>