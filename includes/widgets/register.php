	<div class="modal fade" id="register" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<form class="form-horizontal" id="register-form" action="register.php" method="post">
					<div class="modal-header">
						<h2>Register</h2>
					</div>
					<div class="modal-body">

						<div class="form-group">
							<label for ="register-username" class="col-lg-2 control-label">Username:</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" id="register-username" placeholder="Enter the username you want to use" name="username">
							</div>
						</div>
						<div class="form-group">
							<label for ="register-pwd" class="col-lg-2 control-label">Password:</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" id="register-pwd" placeholder="Enter your password" name="password">
							</div>
						</div>
						<div class="form-group">
							<label for ="register-email" class="col-lg-2 control-label">Email:</label>
							<div class="col-lg-10">
								<input type="email" class="form-control" id="register-email" placeholder="you@example.com" name="email">
							</div>
						</div>
					</div>
					<div class="modal-footer">			
						<button class="btn btn-primary" type="submit" id="register-submit">Submit</button>
						<a class="btn btn-default" data-dismiss="modal" id="register-close">Close</a>
					</div>
				</form>
			</div>
		</div>
	</div>

<!--
	<?php
	$action = $_Get['action'];
	echo '$action';


	?>
	-->