	<div class="navbar navbar-inverse navbar-fixed-top"> 
		<div class="container">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">Home Page</a>

				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-inverse">Submit</button>
				</form>

				<button class="navbar-toggle" data-toggle = "collapse" data-target=".navHeaderCollapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<div class="collapse navbar-collapse navHeaderCollapse">

				<ul class="nav navbar-nav nvabar-right">
					<?php
						if(logged_in()===true) {
						} else {
							include 'loginNav.php';
						}
					?>

					<?php
						if(logged_in()===true) {
						} else {
							include 'registerNav.php';
						}
					?>
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Share to <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Google+</a></li>
							<li><a href="#">Facebook</a></li>
							<li><a href="#">Twitter</a></li>
							<li><a href="#">WeChat</a></li>
							<li><a href="#">Weibo</a></li>
						</ul>
					</li>
					<li><a href="#contact" data-toggle="modal">Contact us</a></li>
					<?php
						if(logged_in()===true) {
							include 'myPageNav.php';
						} else {
						}
					?>
					<?php
						if(logged_in()===true) {
							include 'logoutNav.php';
						} else {
						}
					?>

				</ul>
			</div>
		</div>
	</div> 