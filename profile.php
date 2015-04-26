<!DOCTYPE html>
<html lang="en">
<?php
	session_start();
	?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>3 Col Portfolio - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css3/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css3/3-col-portfolio.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="signup.php">Signup</a>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
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
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Users
                    <small>on our site</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="home1.php">
                    <img class="img-responsive" src="http://meetphool.net/images/nodp.png?1415281465" alt="">
                </a>
                <h3>
                    <a><?php echo $_SESSION['Fname']?></a>
                </h3>
                <p>Level    <?php echo $_SESSION['Level']?></p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="home1.php">
                    <img class="img-responsive" src="http://meetphool.net/images/nodp.png?1415281465" alt="">
                </a>
                <h3>
                    <a><?php echo $_SESSION['Fname']?></a>
                </h3>
                <p>Level 5</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="home1.php">
                    <img class="img-responsive" src="http://meetphool.net/images/nodp.png?1415281465" alt="">
                </a>
                <h3>
                    <a><?php echo $_SESSION['Fname']?></a>
                </h3>
                <p>Level    3</p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="home1.php">
                    <img class="img-responsive" src="http://meetphool.net/images/nodp.png?1415281465" alt="">
                </a>
                <h3>
                    <a><?php echo $_SESSION['Fname']?></a>
                </h3>
                <p>Level  2</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="home1.php">
                    <img class="img-responsive" src="http://meetphool.net/images/nodp.png?1415281465" alt="">
                </a>
                <h3>
                    <a><?php echo $_SESSION['Fname']?></a>
                </h3>
                <p>Level     1</p>
            </div>
         
        </div>


        <hr>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; House.com 2015</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js3/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js3/bootstrap.min.js"></script>

</body>

</html>
