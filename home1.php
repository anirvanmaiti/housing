<!DOCTYPE html>
<html>
<?php
session_start();
?>
<title>Sign up</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link href = "css/bootstrap.min.css" rel = "stylesheet">
                    <link href = "css/styles.css" rel = "stylesheet">
					<link href = "hi.css" rel="stylesheet">
					<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>


<script src="http://maps.google.com/maps/api/js?sensor=false"></script>


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
													<li class="active"><a href="login.php"class="navbar-brand"><?php echo $_SESSION['user'];?></a></li>	
												
													<li><a href = "logout.php" class="navbar-brand">Logout</a></li>
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
					
					<h3>Name:     <?php echo $_SESSION['Fname'];?></h3>
					<h3>Email:    <?php echo $_SESSION['Emailid'];?></h3>
					<h3>Location:   <?php echo $_SESSION['Location'];?></h3>
					<h3>Places Visited:  </h3>
					
<div id="map" style="height: 1000px; width: 1500px;">
</div>
<script type="text/javascript">
    var locations = [
      ['Mumbai', 19.079736, 72.877771, 4],
      ['Chennai', 13.079332, 80.267318, 5],
      ['Hyderabad', 17.382824, 78.486160, 3],
      ['kolkata', 22.573983, 88.360122, 2],
      ['New Delhi', 28.601921, 77.204592, 1]
    ];
 
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 5,
      center: new google.maps.LatLng(21.145403, 79.090121),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });
 
    var infowindow = new google.maps.InfoWindow();
 
    var marker, i;
 
    for (i = 0; i < locations.length; i++) { 
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });
 
      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>

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
 
  
  </body>
</html>

