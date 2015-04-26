<?php
// Inialize session
session_start();


$cerror='error';
$mysqldb='housing';

if(!@mysql_connect('localhost','root','')||!@mysql_select_db($mysqldb))
{
    die(mysql_error());
}

$userid1=mysql_real_escape_string($_POST['user']);
$pass1=mysql_real_escape_string($_POST['pass']);
$query1= mysql_query("SELECT * FROM signup WHERE (Userid = '$userid1') and (Password = '$pass1')");

$row1 = mysql_num_rows($query1);


// Check username and password match
if($row1==1) 
{
	// Set username session variable
	$_SESSION['user'] = $_POST['user'];
	//$username=$_SESSION['user'];
	
	header('Location: home.php');
}
 

else 
{ 
	
	
	$message = ("invalid input");
	
 header("Location: login.php?message=$message");
 
	
}

?>





