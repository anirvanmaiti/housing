<!DOCTYPE html>
<html>
<title>Sign up</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link href = "css/bootstrap.min.css" rel = "stylesheet">
                    <link href = "css/styles.css" rel = "stylesheet">
					<link href = "hi.css" rel="stylesheet">
					<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<body background="http://bit.ly/1HGmiOT">
					
<div class = "navbar navbar-inverse navbar-static-top">
                            <div class = "container">
                                   
                                    <a href = "index.html" class = "navbar-brand">HOME</a>
                                   
                                    <button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
                                            <span class = "icon-bar"></span>
                                            <span class = "icon-bar"></span>
                                            <span class = "icon-bar"></span>
                                    </button>
                                   
                                    <div class = "collapse navbar-collapse navHeaderCollapse">
                                   
                                            <ul class = "nav navbar-nav navbar-right"> 
                                                    <li><a href = "signup.php" class="navbar-brand">Sign Up</a></li>
													<li class="active"><a href="login.php"class="navbar-brand">Login</a></li>	
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
<h4><b><font color="#0093B8" face="Verdana" size="10px">Login</font></b> </h4>          
<div class="container" style="height:90px" >
<form class= "well" method="POST" action="logincheck.php">
<label>Username</label><br>
<input type="text" name="user" class="span3" size="30" maxlength="30"><br><br>
<label>Password</label><br>
<input type="password" name="pass" class="span3" size="30" maxlength="30"><br><br>
<button type="submit" class="btn btn-primary">Login!</button>

</form>
</div>
</center>



</body>
</html>
