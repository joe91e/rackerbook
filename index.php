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
          <a class="brand" href="#">rackerbook</a>
          <ul class="nav">
            <li class="active"><a href="#">
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
			other Rackers.
		  </small>
		  </h1>
        </div>
		<div class="row" style="min-height: 500px;">
		  <div class="span9 rackerbook-column" style="border-right: 1px solid #e0e0e0; min-height: 500px;">
			<h3>Event/Activity Groups<a class="btn small" href="#more-groups" style="margin-left: 5px;">More</a></h3>
			<div class="row" style="padding: 10px;">
				<div class="span4">
					<ul class="unstyeld group-list">
					<li><a href="group.php">Tennis</a></li>
					<li><a href="#ping-pong">Ping pong</a></li>
					<li><a href="#foosball">Foosball</a></li>
					<li><a href="#bowling">Bowling</a></li>
					<li><a href="#basketball">Basketball</a></li>
					<li><a href="#football">Football</a></li>
					<li><a href="#soccer">Soccer</a></li>
					<li><a href="#baseball">Baseball</a></li>
					</ul>
				</div>
				<div class="span4">
					<ul class="unstyeld group-list">
					<li><a href="#womenDeveloperMeetUps">Women Developer Meet-ups</a></li>
					<li><a href="#lunch-with-rackers">Lunch-with-rackers</a></li>
					<li><a href="#activity1">Activity1</a></li>
					<li><a href="#activity2">Activity2</a></li>
					<li><a href="#activity3">Activity3</a></li>
					<li><a href="#activity4">Activity4</a></li>
					<li><a href="#activity5">Activity5</a></li>
					<li><a href="#activity6">Activity6</a></li>
					</ul>
				</div>
			</div>
		  </div>
		  <div class="span9 rackerbook-column" style="min-height: 500px;">
			<h3>Recent Posts</h3>
			<!-- post 1-->
			<br/>			
			<div class="row">
				<div class="span2">
					<span style="margin-left: 15px;" class="glyphicon glyphicon-user rackerbook-profile-pic"></span><!-- 50 x 50 -->
				</div>
				<div class="span7">
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
<pre>hello Rackers I'd like to play tennis this friday. 
Anyone care to join?
</pre>
						
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
									<div class="span5">
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
									<div class="span5">
										<a href="#racker2">racker2</a>
										If we can get enough Rackers to join, we could match players appropriately.
										<br/><span class="timestamp">11:07 PM 7/30/2013</span>
									</div>
								</div>
							</li>
						</ul>
						<!-- comment 2-->	
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
				<div class="span7">
					<!-- POST FROM-> TO -->
					<a href="#joe.racker" class="racker-profile-link">racker3</a>
					&nbsp;
					<span class="glyphicon glyphicon-play"></span>
					&nbsp;
					<a href="group.php" class="racker-group-link">BBQ-Cookout</a>
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
							<input class="xlarge" value="Anywhere" type="text" disabled>					
						</div>					
						<pre>Anyone down for some BBQ and beer this weekend?
						</pre>
						<span class="timestamp">Posted on 11:30 PM 7/30/2013</span>
						<br/><br/>
					</div>
				</div>
			</div>
			<!-- post 2-->	

			<!-- post 3-->
			<hr/>
			<div class="row">
				<div class="span2">
					<span style="margin-left: 15px;" class="glyphicon glyphicon-user rackerbook-profile-pic"></span><!-- 50 x 50 -->
				</div>
				<div class="span7">
					<!-- POST FROM-> TO -->
					<a href="#joe.racker" class="racker-profile-link">racker3</a>
					&nbsp;
					<span class="glyphicon glyphicon-play"></span>
					&nbsp;
					<a href="group.php" class="racker-group-link">BBQ-Cookout</a>
					<!-- POST FROM-> TO -->
					<br/><br/>
					<div class="conversation">				
<pre>This is just a comment/discussion, not invitation. Users may comment on this,
but since this is just a discussion, there is no need to "Join".
</pre>
						&nbsp;&nbsp;
						<span class="timestamp">Posted on 11:30 PM 7/30/2013</span>
						<br/><br/>
					</div>
				</div>
			</div>
			<!-- post 3-->				
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
