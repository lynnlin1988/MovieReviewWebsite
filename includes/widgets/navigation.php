	<div class="navbar navbar-inverse navbar-fixed-top"> 
		<div class="container">
			<div class="navbar-header">
				<a href="./index.php" class="navbar-brand">Home Page</a>

				<form class="navbar-form navbar-left" role="search" action="search.php" method="post">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search For Movie" name="search">
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
							<li><a href="https://plus.google.com/share?url=localhost/MovieReviewWebsite" target="_blank">Google+</a></li>
							<li><a href="https://www.facebook.com/sharer/sharer.php?u=localhost/MovieReviewWebsite" target="_blank">Facebook</a></li>
							<li><a href="https://twitter.com/share" data-url="http://localhost/MovieReviewWebsite/" data-text="Movie Review Website" data-size="large" data-count="none">Twitter</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></li>
							<li><a href="http://service.weibo.com/share/share.php?url=localhost/MovieReviewWebsite" target="_blank">Weibo</a></li>
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