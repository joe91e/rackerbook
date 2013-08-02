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
	<script src="fbootstrapp/js/bootstrap-datepicker.js" type="text/javascript" language="javascript"></script>
	<link href="fbootstrapp/css/datepicker.css" type="text/css" rel="stylesheet"></link>	
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
            <li class="active"><a href="index.php">
				<span class="glyphicon glyphicon-home"></span></a>
			</li>
            <li>
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
		  <ul class="nav" id="userMenus">
            <li class=""><a href="profile.php">
				<span class="glyphicon glyphicon-user"></span></a>
			</li>		  
            <li class="dropdown" data-dropdown="dropdown">
				<a id="notification-btn" class="racker-dropdown menu twipsy-below" href="#" rel="twipsy" data-original-title="You have 2 notifications">
				<span class="glyphicon glyphicon-bell"></span>
				<span id="notification-count">2</span>
				</a>
				<ul class="menu-dropdown">
					<li><a href="#">Joe Racker Invited you to tennis!</a></li>
					<li class="divider"></li>
					<li><a href="#">Jane Racker challenged you to foosball.</a></li>
					<li class="divider"></li>
					<li><center><a href="#">My Inbox</a></center></li>
				</ul>
			</li>		  
            <li class="dropdown" data-dropdown="dropdown">
				<a href="#" id="settingsDropdown" class="racker-dropdown menu">
				<span class="glyphicon glyphicon-cog"></span>
				</a>
				<ul class="menu-dropdown">
					<li><a href="editAccount.php">Edit Account</a></li>
					<li class="divider"></li>
					<li><a href="index.php">Logout</a></li>
				</ul>
			</li>			
		  </ul>
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
				<h3>My Info</h3>
				<div class="row">	
					<center>
					<table id="signUpForm" class="signUpForm bordered-table" style="width: 92%;">
					<tbody>
						<tr>
							<td><input type="text" style="width: 96%;" placeholder="First Name" /></td>
							<td><input type="text" style="width: 96%;" placeholder="Last Name" /></td>
						</tr>
						<tr>
							<td colspan=2><input type="text" placeholder="Your Rackspace Email" style="width: 98%;" /></td>
						</tr>
						<tr>
							<td colspan=2><input type="text" placeholder="Re-enter Email" style="width: 98%;" /></td>
						</tr>
						<!--
						<tr>
							<td colspan=2><input type="text" placeholder="New Password" style="width: 98%;" /></td>
						</tr>
						<tr>
							<td colspan=2><input type="text" placeholder="Confirm Password" style="width: 98%;" /></td>
						</tr>-->
						<tr>
							<td colspan=2>
								<div class="input-prepend">
								<span class="add-on">Location</span>
								&nbsp;
								<select style="height: 24px;">
									<option value="Austin, TX">Austin, TX</option>
									<option value="San Antonio, TX">San Antonio, TX</option>
									<option value="Hayes, UK">Hayes, UK</option>
									<option value="San Francisco, CA">San Francisco, CA</option>
									<option value="Blacksburg, VA">Blacksburg, VA</option>
									<option value="Sydney, AUS">Sydney, AUS</option>
									<option value="Hong Kong">Hong Kong</option>
								</select>
								</div>
							</td>
						</tr>						
						<tr>
							<td colspan=2>
								<div class="input-prepend">
								<span class="add-on" style="">Phone #</span>
								&nbsp;
								<input type="text" style="width: 25px;" maxlength="3" />
								<span class="glyphicon glyphicon-minus" style="font-size: 8px;"></span>
								<input type="text" style="width: 25px;" maxlength="3" />
								<span class="glyphicon glyphicon-minus" style="font-size: 8px;"></span>
								<input type="text" style="width: 30px;" maxlength="4" />
								</div>
							</td>
						</tr>	
						<tr id="saveMyInfoRow">
							<td colspan=2 style="text-align: center;"><a class="btn danger">Save</a></td>
						</tr>
					<tbody>
					</table>
					</center>
				</div>
			</div>
			<div class="span9 rackerbook-column" style="min-height: 500px;">
				<div class="row">
				</div>			
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
