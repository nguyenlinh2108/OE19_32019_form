<?php
session_start();

if(isset($_COOKIE) || isset($_SESSION))
{
	date_default_timezone_set("Asia/Ho_Chi_Minh");
	echo "Hello " .$_GET["name"] . "! <br>";
	$dt = new DateTime();
	echo $dt->format('d-m-y h:i:s')."<br>";
	echo "<a href=\"logout.php\">Logout</a>";
}
?>