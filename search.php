<?php

session_start();

$cerror='error';
$mysqldb='housing';

if(!@mysql_connect('localhost','root','')||!@mysql_select_db($mysqldb))
{
    die(mysql_error());
}

$name=mysql_real_escape_string($_POST['q']);

$query1= mysql_query("SELECT * FROM signup WHERE (Fname = '$name')");
$row1= mysql_num_rows($query1);
$query2= mysql_query("SELECT Project,Cscore,Lscore,Sscore FROM places WHERE (Pname = '$name')");
$row2 = mysql_num_rows($query2);

if($row1) 
{
	// Set username session variable
	
	//$username=$_SESSION['user'];
	while($row3=mysql_fetch_array($query1))
	{
		$fname=$row3['Fname'];
		$_SESSION['Fname']=$fname;
		$level=$row3['Level'];
		$_SESSION['Level']=$level;
		$email=$row3['Emailid'];
		$_SESSION['Emailid']=$email;
		$location=$row3['Location'];
		$_SESSION['Location']=$location;
	header('Location: profile.php');
	}
}
else if($row2)
 {
	
		while($row=mysql_fetch_array($query2))
	{
		$project=$row['Project'];
		$_SESSION['Project']=$project;
		$_SESSION['Project1']=$project;
		
		$cscore=$row['Cscore'];
		$_SESSION['Cscore']=$cscore;
		
		$lscore=$row['Lscore'];
		$_SESSION['Lscore']=$lscore;
		$sscore=$row['Sscore'];
		$_SESSION['Sscore']=$sscore;
		header('Location: place.php');
	}
	
	//header('Location: place.html');
 }

else 
{ 
	
	
	$message = ("invalid input");
	
 header("Location: home.php?message=$message");
 
	
}

?>
