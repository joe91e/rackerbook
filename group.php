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
	<script src="fbootstrapp/js/bootstrap-timepicker.min.js" type="text/javascript" language="javascript"></script>
	<link href="fbootstrapp/css/datepicker.css" type="text/css" rel="stylesheet"></link>	
	<link href="fbootstrapp/css/bootstrap-timepicker.css" type="text/css" rel="stylesheet"></link>
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
		  <div class="row">
		  <!--<div class="span1">
			<img style="border: 1px solid #C0C0C0; padding: 5px; border-radius: 5px;" src="images/group-icons/tennis-icon.png" />
		  </div>--><!-- group icon. MUST BE 30px by 30px-->
		  <div class="span17" style="margin-top: 5px;">
			<h1>Tennis (Austin, TX)</h1>
		  </div>
		  </div>
        </div>
		<div class="row" style="min-height: 500px;">
		  <div class="span5 rackerbook-column" style="border-right: 1px solid #e0e0e0; min-height: 500px; padding-right: 5px;">
			<h3>About</h3>
			This group is for any rackers with interest in playing or learning tennis.
			<hr/>
			<h3>Location</h3>
			Austin, TX			
			<hr/>
			<h3>Members</h3>
			<table class="zebra-striped bordered-table members-list"><!-- table consisting of group members-->
				<tbody>
				<tr><!-- member 1-->
					<td>
						<a href="#kishore">kishore alavalapati</a>
					</td>
					<td class="actionCell">
					<a class="btn small danger twipsy-below" rel="twipsy" data-original-title="challenge/invite" style="margin: 2px; padding: 1px;">
						<span class="glyphicon glyphicon-ok"></span>
					</a>
					&nbsp;&nbsp;
					<a class="btn small success twipsy-below" rel="twipsy" data-original-title="rate" style="padding: 1px;">
						<span class="glyphicon glyphicon-star"></span>
					</a>
					</td>
				</tr><!-- member 1-->
				<tr><!-- member 2-->
					<td>
						<a href="#kishore">racker somerandomlonglastname</a>
					</td>
					<td class="actionCell">
					<a class="btn small danger twipsy-below" rel="twipsy" data-original-title="challenge/invite" style="margin: 2px; padding: 1px;">
						<span class="glyphicon glyphicon-ok"></span>
					</a>
					&nbsp;&nbsp;
					<a class="btn small success twipsy-below" rel="twipsy" data-original-title="rate" style="padding: 1px;">
						<span class="glyphicon glyphicon-star"></span>
					</a>
					</td>
				</tr><!-- member 2-->	
				<tr><!-- member 3-->
					<td>
						<a href="#kishore">noob1</a>
					</td>
					<td class="actionCell">
					<a class="btn small danger twipsy-below" rel="twipsy" data-original-title="challenge/invite" style="margin: 2px; padding: 1px;">
						<span class="glyphicon glyphicon-ok"></span>
					</a>
					&nbsp;&nbsp;
					<a class="btn small success twipsy-below" rel="twipsy" data-original-title="rate" style="padding: 1px;">
						<span class="glyphicon glyphicon-star"></span>
					</a>
					</td>
				</tr><!-- member 3-->
				<tr><!-- member 4-->
					<td>
						<a href="#kishore">noob2</a>
					</td>
					<td class="actionCell">
					<a class="btn small danger twipsy-below" rel="twipsy" data-original-title="challenge/invite" style="margin: 2px; padding: 1px;">
						<span class="glyphicon glyphicon-ok"></span>
					</a>
					&nbsp;&nbsp;
					<a class="btn small success twipsy-below" rel="twipsy" data-original-title="rate" style="padding: 1px;">
						<span class="glyphicon glyphicon-star"></span>
					</a>
					</td>
				</tr><!-- member 4-->
				<tr><!-- member 5-->
					<td>
						<a href="#kishore">noob3</a>
					</td>
					<td class="actionCell">
					<a class="btn small danger twipsy-below" rel="twipsy" data-original-title="challenge/invite" style="margin: 2px; padding: 1px;">
						<span class="glyphicon glyphicon-ok"></span>
					</a>
					&nbsp;&nbsp;
					<a class="btn small success twipsy-below" rel="twipsy" data-original-title="rate" style="padding: 1px;">
						<span class="glyphicon glyphicon-star"></span>
					</a>
					</td>
				</tr><!-- member 5-->				
				</tbody>
			</table><!-- table consisting of group members-->
			<center>
			<a class="btn small" href="#more-groups" style="margin-left: 5px;">View All</a>
			</center>
			<hr/>
			<h3>Useful Links</h3>
			<ul>
				<li>
					<a href="http://www.tennismaps.com/index.asp?regionid=1">Tennis Maps</a>
				</li>
			</ul>
		  </div>
		  
		  <div class="span8 rackerbook-column" style="min-height: 500px; border-right: 1px solid #E0E0E0; padding-right: 10px;"><!-- start of rackerbook-column -->
			<div><!-- post to group wall -->
				<div>
					<a class="btn inverse postTypeBtn" id="eventPostBtn" onclick="togglePostType('event')">
						<span class="glyphicon glyphicon-calendar">&nbsp;Event</span>
					</a>
					<a class="btn postTypeBtn" id="commentPostBtn" onclick="togglePostType('comment')">
						<span class="glyphicon glyphicon-comment">&nbsp;Comment</span>
					</a>
				</div>
				<div style="padding: 5px 5px 5px 0px;">
					<div id="eventPostDetails">							
			   <table class="eventTimeTable">
			   <tbody>
				   <tr>
					  <td><span class="help-block">Start:</span></td><td><span class="help-block">End:</span></td>
				   </tr>
				   <tr>
					  <td>
						  <div data-date-format="mm/dd/yyyy" id="dp-start" data-date="08/01/2013" class="input-append date">
							<input id="requestDate" type="text" readonly="" value="08/01/2013" size="9" class="small" 
							style="height: 22px; padding: 0px;">
							<span class="add-on" style="height: 22px; cursor: pointer; padding: 0px;">
								<span class="glyphicon glyphicon-calendar"></span>
							</span>
						  </div>
			<div class="input-append bootstrap-timepicker">
				<input id="timepicker-start" type="text" style="width: 45px;">
				<span class="add-on"><span class="glyphicon glyphicon-time"></span></span>
			</div>
					  </td>
					  <td>
						  <div data-date-format="mm/dd/yyyy" id="dp-end" data-date="08/01/2013" class="input-append date">
							<input id="requestDate" type="text" readonly="" value="08/01/2013" size="9" class="small" 
							style="height: 22px; padding: 0px;">
							<span class="add-on" style="height: 22px; cursor: pointer; padding: 0px;">
								<span class="glyphicon glyphicon-calendar"></span>
							</span>
						  </div>
			<div class="input-append bootstrap-timepicker">
				<input id="timepicker-end" type="text" style="width: 45px;">
				<span class="add-on"><span class="glyphicon glyphicon-time"></span></span>
			</div>
					  </td>
				  </tr>
			  </tbody>
			  </table>
						<div class="inline-input when-where">
							<span class="help-block">Where:</span>
							<input class="xlarge" value="" placeholder="pick a place ..." type="text">
							<span class="help-block">Details:</span>
						</div>
					</div>
					<textarea class="new-post" placeholder="Write something ... "></textarea>
					<center> 
					<a class="btn danger" id="eventPostSubmit" style="margin-top: 5px;">Submit Event</a>
					<a class="btn danger" id="commentPostSubmit" style="margin-top: 5px; display: none;">Submit Comment</a>
					</center>
				</div>
			</div><!-- post to group wall -->
			<hr/>
			<h3>Recent Posts</h3>
			<!-- post 1-->
			<br/>
			<div class="row">
				<div class="span2">
					<span style="margin-left: 15px;" class="glyphicon glyphicon-user rackerbook-profile-pic"></span><!-- 50 x 50 -->
				</div>
				<div class="span6">
					<!-- POST FROM-> TO -->
					<a href="#joe.racker" class="racker-profile-link">Joe Racker</a>
					&nbsp;
					<span class="glyphicon glyphicon-play"></span>
					&nbsp;
					<a href="group.php" class="racker-group-link">Tennis</a>
					<!-- POST FROM-> TO -->
					<br/><br/>
					<div class="conversation">
						<div class="inline-input when-where">
							<span class="help-block">When: (Central Standard Time)</span>
							<input class="medium" value="8/3/2013 12:00PM" type="text" disabled>
							to
							<input class="medium" value="8/3/2013 1:00PM" type="text" disabled> 			
						</div>
						<div class="inline-input when-where">
							<span class="help-block">Where:</span>
							<input class="xlarge" value="Austin Tennis Center" type="text" disabled>					
						</div>						
<pre>hello rackers I'd like to play tennis this friday. 
Anyone care to join?
</pre>
						<a href="#join-event1">Join</a>&nbsp;&nbsp;<a href="#invite-event1">Invite</a>&nbsp;&nbsp;
						<span class="timestamp">Posted on 11:00 PM 7/30/2013</span>
						<br/><br/>
						<ul class="breadcrumb racker-post">
							<li>
								<a href="#join-event1">
									<span class="glyphicon glyphicon-ok"></span>
								</a>
								<a>
									&nbsp;Jane Racker
								</a>Joined this.
							</li>
						</ul>
						<!-- comment 1-->
						<ul class="breadcrumb racker-post">
							<li>
								<div class="row">
									<div class="span1">
										<span class="glyphicon glyphicon-user rackerbook-profile-pic-small"></span>
									</div>
									<div class="span4">
										<a href="#racker1">racker1</a>
										I've never played tennis before and would like to learn.
										Can noobs join too?
										<br/><span class="timestamp">11:05 PM 7/30/2013</span>
									</div>
								</div>
							</li>
						</ul>
						<!-- comment 1-->
						<!-- comment 2-->
						<ul class="breadcrumb racker-post">
							<li>
								<div class="row">
									<div class="span1">
										<span class="glyphicon glyphicon-user rackerbook-profile-pic-small"></span>
									</div>
									<div class="span4">
										<a href="#racker2">racker2</a>
										If we can get enough rackers to join, we could match players appropriately.
										<br/><span class="timestamp">11:07 PM 7/30/2013</span>
									</div>
								</div>
							</li>
						</ul>
						<!-- comment 2-->	
						<!-- new comment to be added -->
						<ul class="breadcrumb racker-post">
							<li>
								<div class="row">
									<div class="span1">
										<span class="glyphicon glyphicon-user rackerbook-profile-pic-small"></span>
									</div>
									<div class="span4">
										<textarea class="new-post" id="post1" name="post1"></textarea>
										<div style="margin-top: 5px;">
											<center>
											<a class="btn danger">Comment</a>
											</center>
										</div>									
									</div>
								</div>							
							</li>
						</ul>
						<!-- new comment to be added -->
					</div>
				</div>
			</div>
			<!-- post 1-->
			
			<!-- post 2-->
			<hr/>
			<div class="row">
				<div class="span2">
					<span style="margin-left: 15px;" class="glyphicon glyphicon-user rackerbook-profile-pic"></span><!-- 50 x 50 -->
				</div>
				<div class="span6">
					<!-- POST FROM-> TO -->
					<a href="#joe.racker" class="racker-profile-link">racker3</a>
					&nbsp;
					<span class="glyphicon glyphicon-play"></span>
					&nbsp;
					<a href="group.php" class="racker-group-link">Tennis</a>
					<!-- POST FROM-> TO -->
					<br/><br/>
					<div class="conversation">				
<pre>This is just a comment/discussion, not invitation. Users may comment on this,
but since this is just a discussion, there is no need to "Join".
</pre>
						&nbsp;&nbsp;
						<span class="timestamp">Posted on 11:30 PM 7/30/2013</span>
						<br/><br/>
						<!-- new comment to be added -->
						<ul class="breadcrumb racker-post">
							<li>
								<div class="row"> 
									<div class="span1">
										<span class="glyphicon glyphicon-user rackerbook-profile-pic-small"></span>
									</div>
									<div class="span4">
										<textarea class="new-post" id="post2" name="post2"></textarea>
										<div style="margin-top: 5px;">
											<center>
											<a class="btn danger">Comment</a>
											</center>
										</div>
									</div>
								</div>							
							</li>
						</ul>
						<!-- new comment to be added -->
					</div>
				</div>
			</div>
			<!-- post 2-->								
		  </div><!-- end of rackerbook-column -->
		  
		  <div class="span6 rackerbook-column" style="min-height: 500px;"><!-- start of rackerbook-column -->
			<h3>Upcoming Events</h3>
			<!-- post 1-->
			<br/>			
			<div class="row">
				<div class="span6">
					<!-- POST FROM-> TO -->
					<a href="#joe.racker" class="racker-profile-link">Joe Racker</a>
					&nbsp;
					<span class="glyphicon glyphicon-play"></span>
					&nbsp;
					<a href="group.php" class="racker-group-link">Tennis</a>
					<!-- POST FROM-> TO -->
					<br/><br/>
					<div class="conversation">
						<div class="inline-input when-where">
							<span class="help-block">When: (Central Standard Time)</span>
							<input class="medium" value="8/3/2013 12:00PM" type="text" disabled>
							<!--<input value="12:00PM" style="width: 45px;" type="disabled">-->
							to
							<input class="medium" value="8/3/2013 1:00PM" type="text" disabled>
							<!--<input value="1:00PM" style="width: 45px;" type="disabled">-->				
						</div>
						<div class="inline-input when-where">
							<span class="help-block">Where:</span>
							<input class="xlarge" value="Austin Tennis Center" type="text" disabled>					
						</div>						
<pre>hello rackers I'd like to play tennis this friday. 
Anyone care to join?
</pre>
						<a href="#join-event1">Join</a>&nbsp;&nbsp;<a href="#invite-event1">Invite</a>&nbsp;&nbsp;
						<span class="timestamp">Posted on 11:00 PM 7/30/2013</span>
						<br/><br/>
						<ul class="breadcrumb racker-post">
							<li>
								<a href="#join-event1">
									<span class="glyphicon glyphicon-ok"></span>
								</a>
								<a>
									&nbsp;Jane Racker,
								</a>
								<a>
									&nbsp;Kishore,
								</a>
								<a>
									&nbsp;racker1,
								</a>
								<a>
									&nbsp;racker2,
								</a>
								<a>
									&nbsp;noob1,
								</a>
								<a>
									&nbsp;noob2
								</a>								
								Joined this.
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- post 1-->				
		  </div><!-- end of rackerbook-column -->		  
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
	$('#timepicker-start').timepicker();
	$('#timepicker-end').timepicker();
	setColumnHeights();
	$('.racker-dropdown').each(function(){
		$(this).dropdown();
	})
	$('.twipsy-below').each(function(){
		$(this).twipsy({ placement: "below"});
	})
	
	$('#dp-start').datepicker();
	$('#dp-start').datepicker().on('changeDate', function(ev){
	});	

	$('#dp-end').datepicker();
	$('#dp-end').datepicker().on('changeDate', function(ev){
	});		
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

function togglePostType(type)
{
	$('a.postTypeBtn').each(function(){
		if($(this).attr('id') == type + "PostBtn")
		{
			$(this).addClass('inverse');
		}
		else
		{
			$(this).removeClass('inverse');
		}
	})
	
	if(type == "event")
	{
		$('#eventPostDetails').show();
		$('#commentPostSubmit').hide();
		$('#eventPostSubmit').show();
	}
	else
	{
		$('#eventPostDetails').hide();
		$('#eventPostSubmit').hide();
		$('#commentPostSubmit').show();
	}
}
</script>
</html>
