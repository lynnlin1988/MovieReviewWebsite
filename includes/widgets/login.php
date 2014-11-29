	<div class="modal fade" id="login" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<form class="form-horizontal" id="login-form" action="login.php" method="post">
					<div class="modal-header">
						<h2>Log in</h2>
					</div>
					<div class="modal-body">

						<div class="form-group">
							<label for ="login-username" class="col-lg-2 control-label">Username:</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" id="login-username" placeholder="Enter your username" name="username">
							</div>
						</div>
						<div class="form-group">
							<label for ="login-pwd" class="col-lg-2 control-label">Password:</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" id="login-pwd" placeholder="Enter your password" name="password">
							</div>
						</div>
					</div>
					<div class="modal-footer">			
						<button class="btn btn-primary" type="submit">Submit</button>
						<button class="btn btn-default">Forgot username or password?</button>
						<a class="btn btn-default" data-dismiss="modal">Close</a>
					</div>
				</form>
			</div>
		</div>
	</div>