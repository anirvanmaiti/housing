<!DOCTYPE html>

<html>
<title>Sign up</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link href = "css/bootstrap.min.css" rel = "stylesheet">
<!--<link href = "css/styles.css" rel = "stylesheet">-->
					<link href = "hi.css" rel="stylesheet">
					<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
					<body background="http://bit.ly/1GvP04Z">
					
					

<div class = "navbar navbar-inverse navbar-static-top">
                            <div class = "container">
                                   
                                    <a href = "index.html" class = "navbar-brand">Home</a>
                                   
                                    <button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
                                            <span class = "icon-bar"></span>
                                            <span class = "icon-bar"></span>
                                            <span class = "icon-bar"></span>
                                    </button>
                                   
                                    <div class = "collapse navbar-collapse navHeaderCollapse">
                                   
                                            <ul class = "nav navbar-nav navbar-right"> 
                                                    <li class="active"><a href = "signup.php" class="navbar-brand">Sign Up</a></li>
										
													<li><a href = "login.php" class="navbar-brand">Login</a></li>	
                                            </ul>
											<div id="tfheader">
		<form id="tfnewsearch" method="POST" action="search.php">
		        <input type="text" id="tfq" class="tftextinput4" name="q" size="21" maxlength="120" value="Find a friend or place"><input type="submit" value=" " class="tfbutton4">
		</form>
		<div class="tfclear"></div>
	</div>
        
                                    </div>
                                   
                            </div>
                    </div>

<script type="text/javascript">
window.onload = function(){ 
	//Get submit button
	var submitbutton = document.getElementById("tfq");
	//Add listener to submit button
	if(submitbutton.addEventListener){
		submitbutton.addEventListener("click", function() {
			if (submitbutton.value == 'Find a friend or place'){//Customize this text string to whatever you want
				submitbutton.value = '';
			}
		});
	}
}
</script>
<!-- CSS styles for standard search box with placeholder text-->
<style type="text/css">
	#tfheader{
		background-color:#000000;
	}
	#tfnewsearch{
		float:right;
		padding:20px;
	}
	.tftextinput4{
		margin: 0;
		padding: 6px 15px;
		font-family: Arial, Helvetica, sans-serif;
		font-size:14px;
		color:#666;
		border:1px solid #0076a3; border-right:0px;
		border-top-left-radius: 5px 5px;
		border-bottom-left-radius: 5px 5px;	
	}
	.tfbutton4 {
		margin: 0;
		padding: 0;
		width:30px;
		height:30px;
		font-family: Arial, Helvetica, sans-serif;
		font-size:14px;
		font-weight:bold;
		outline: none;
		cursor: pointer;
		text-align: center;
		text-decoration: none;
		color: #ffffff;
		border: solid 1px #0076a3; border-right:0px;
		border-top-left-radius: 5px 5px;
		border-bottom-left-radius: 5px 5px;
		background: #438db8 url('http://www.q-park.ie/Portals/8/images/search-icon.png');
	}
	/* Fixes submit button height problem in Firefox */
	.tfbutton4::-moz-focus-inner {
	  border: 0;
	}
	.tfclear{
		clear:both;
	}
</style>
                                   
                                    </div>
                                   
                            </div>
                    </div>
<center>
       <h4><b><font color="#CC0099" size="15px" face="Verdana">Sign up</font></b></h4>             
<div class="container" style="height:50px" >
<form class= "well" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<label text-align:left><font size="6px">First Name</font></label><br>
<input type="text" name="fname" class="span3" size="30" maxlength="30"><br><br>
<label><font size="6px">Last Name</font></label><br>
<input type="text" name="lname" class="span3" size="30" maxlength="30"><br><br>
<label><font size="6px">Email-id</font></label><br>
<input type="email" name="email" class="span3" size="30" maxlength="30"><br><br>
<label><font size="6px">User-id</font></label><br>
<input type="text" name="user" class="span3" size="30" maxlength="30" ><br><br>
<label><font size="6px">Password</font></label><br>
<input type="password" name="pass" class="span3" size="30" maxlength="30"><br><br>
<label><font size="6px">Location</font></label><br>
<input type="text" name="location" class="span3" size="30" maxlength"30"><br><br>
<label><font size="6px">Level</font></label><br>
 <select name="level">
  <option value="one">1</option>
  </select> 



<button type="submit" class="btn btn-primary"><font size="5px">Sign Up!</font></button>
</form>
</div>
</center>



<?php

$cerror='error';
$mysqldb='housing';

if(!@mysql_connect('localhost','root','')||!@mysql_select_db($mysqldb))
    {
    die(mysql_error());
    }

if(isset($_POST['user'])  &&  isset($_POST['pass']))

{

if(!empty($_POST['user'])  &&  !empty($_POST['pass']))

{

$email=$_POST['email'];
$userid=$_POST['user'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$pass=$_POST['pass'];
$level=$_POST['level'];
$location=$_POST['location'];
$message="Hi, $fname has registered on your website";
$message2="Hi $fname, you have been registered on our website with the following details:\nEmail-id: $email\nUser: $userid\nPassword: $pass\n";
//mail("akshita_1102@yahoo.com","New registration",$message,"From:$fname\n");
//mail($email,"You have been registered",$message2,"From:$fname\n");
$query="INSERT INTO signup VALUES('$fname','$lname','$email','$userid','$pass','$level','$location')";
$sqlrun=mysql_query($query);
if($sqlrun)
{
 ?>
  <html><h6><b>Thank you! You are registered! :)</b></h6></html>
<?php
}

else 
die(mysql_error());
}


else 
echo "Enter all fields";

}


?>
</body>
</html>


