<!DOCTYPE html>
<html lang="en">
  <head>
    <script src="fbootstrapp/js/jquery-1.7.min.js"></script>
	<script src="fbootstrapp/js/bootstrap-alerts.js"></script>
	<script src="fbootstrapp/js/bootstrap-buttons.js"></script>
	<script src="fbootstrapp/js/bootstrap-dropdown.js"></script>
	<script src="fbootstrapp/js/bootstrap-modal.js"></script>
	<script src="fbootstrapp/js/bootstrap-popover.js"></script>
	<script src="fbootstrapp/js/bootstrap-scrollspy.js"></script>
	<script src="fbootstrapp/js/bootstrap-tabs.js"></script>
	<script src="fbootstrapp/js/bootstrap-twipsy.js"></script>
    <link href="fbootstrapp/css/bootstrap.css" rel="stylesheet">
	<link href="fbootstrapp/css/bootstrap-glyphicons.css" rel="stylesheet">	
    <style type="text/css">
      /* Override some defaults */
      html, body {
        background-color: #eee;
      }
      body {
        padding-top: 40px; /* 40px to make the container go all the way to the bottom of the topbar */
      }
      .container > footer p {
        text-align: center; /* center align it with the container */
      }
      .container {
        width: 860px; /* downsize our container to make the content feel a bit tighter and more cohesive. NOTE: this removes two full columns from the grid, meaning you only go to 14 columns and not 16. */
      }

      /* The white background content wrapper */
      .container > .content {
        background-color: #fff;
        padding: 20px;
        margin: 0 -20px; /* negative indent the amount of the padding to maintain the grid system */
        -webkit-border-radius: 0 0 6px 6px;
           -moz-border-radius: 0 0 6px 6px;
                border-radius: 0 0 6px 6px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
                box-shadow: 0 1px 2px rgba(0,0,0,.15);
      }

      .topbar .btn {
        border: 0;
      }
    </style>
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
  </head>
  <body>
    <div class="topbar">
      <div class="fill">
        <div class="container">
		  <a class="brand" style="padding: 0px; margin-right: 25px; margin-left: -5px;">
			<img src="images/rackspace-logo.png" />
		  </a>
          <a class="brand" href="index.php">rackerbook</a>
          <ul class="nav">
            <li class=""><a href="index.php">
				<span class="glyphicon glyphicon-home"></span></a>
			</li>
            <li class="active">
				<a href="about.php">
					<span class="glyphicon glyphicon-question-sign"></span>
				</a>
			</li>
			<li>
				<div class="input-append">
					<input type="text" size="16" name="appendedInput" id="appendedInput" class="mini topbar-search"
					placeholder="Search for groups, people, things">
					<span class="add-on topbar-search">
						<span class="glyphicon glyphicon-search">
						</span>
					</span>
				</div>
			</li>
          </ul>
          <form action="loggedIn.php" class="pull-right">
            <input class="input-small" type="text" placeholder="Email">
            <input class="input-small" type="password" placeholder="Password">
            <a class="btn inverse" href="loggedIn.php">Sign in</a>
			<a class="btn" href="signup.php" style="color: #000;">Sign Up</a>
          </form>
        </div>
      </div>
    </div>

    <div class="container">
	<!-- CONTENT: THIS IS WHERE THE VIEWS FOR EACH PAGE WILL BE DIFFERENT-->
      <div class="content" style="min-height: 500px;">
        <div class="page-header">
          <h1>
		  <small>
		    Rackerbook makes it easy to organize events/activities with 
			other rackers.
		  </small>
		  </h1>
        </div>
		<div class="row">
			<div class="span9 rackerbook-column" style="border-right: 1px solid #e0e0e0; min-height: 500px;">
				<h3>About</h3>
				<div class="row">
					<ul>
						<li><h5>Create/join groups with other rackers who share similar interests.</h5></li>
						<li><h5>Plan and organize events/activities through rackerbook groups, and keep yourself
						better updated.</h5></li>
						<li><h5>Challenge/Invite other rackers to events/activities, and help yourself meet and greet other rackers.</h5></li>
					</ul>
				<center>
					<div>
					<img style="border: 1px solid #C0C0C0; padding: 5px; border-radius: 5px;" src="images/about1.png" />
					</div>	
				</center>
				</div>
			</div>
			<div class="span9 rackerbook-column" style="min-height: 500px;">
				<h3>Admin Contact/Credits</h3>
				<div class="row">
					<ul>
						<li><h5>Kishore Alavalapati</h5></li>
						<li><h5>Ed Cranford</h5></li>
						<li><h5>Amy Dang</h5></li>						
						<li><h5>Joseph Ellyson</h5></li>
						<li><h5>Anne Gentle</h5></li>
						<li><h5>DJ Johnstone</h5></li>
					</ul>
				</div>
				<center>
					<div>
						<img style="border: 1px solid #C0C0C0; padding: 5px; border-radius: 5px;" src="images/about2.png" />
					</div>
				</center>				
			</div>
		</div>
      </div><!-- CONTENT: THIS IS WHERE THE VIEWS FOR EACH PAGE WILL BE DIFFERENT-->
      <footer>
		<center>
			<img src="images/rackerpowered.png" class="rackerpowered"/>
		</center>
      </footer>

    </div> <!-- /container --> 
  </body>
 <script language="javascript">
$(document).ready(function(){
	setColumnHeights();
	$('.racker-dropdown').each(function(){
		$(this).dropdown();
	})
	$('.twipsy-below').each(function(){
		$(this).twipsy({ placement: "below"});
	})	
})

function setColumnHeights()
{
	var maxHeight = 500; //minumum height should be at least 500px;
	$("div.rackerbook-column").each(function(){
		var curHeight = $(this).height();
		if(curHeight > maxHeight)
		{
			maxHeight = curHeight;
		}
	})
	
	$('div.rackerbook-column').each(function(){
		$(this).css('height', maxHeight);
	})
}
</script> 
</html>
