	<div class="modal fade" id="profile" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<form class="form-horizontal" id="register-form" action="profile.php" method="post">
					<div class="modal-header">
						<h2>Edit your profile</h2>
					</div>
					<div class="modal-body">

						<div class="form-group">
							<label for ="profile-country" class="col-lg-2 control-label">Country:</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" id="profile-country" placeholder="Enter your country" name="country">
							</div>
						</div>
						<div class="form-group">
							<label for ="profile-summary" class="col-lg-2 control-label">Summary:</label>
							<div class="col-lg-10">
								<textarea class="form-control" rows="5" id="profile-summary" placeholder="Write a brief description of yourself" name="summary"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for ="profile-email" class="col-lg-2 control-label">Email:</label>
							<div class="col-lg-10">
								<input type="email" class="form-control" id="profile-email" placeholder="you@example.com" name="email">
							</div>
						</div>
					</div>
					<div class="modal-footer">			
						<button class="btn btn-primary" type="submit" id="register-submit">Submit</button>
						<a class="btn btn-default" data-dismiss="modal" id="register-close">Cancel</a>
					</div>
				</form>
			</div>
		</div>
	</div>