<?php require 'app/views/partials/header.view.php'; ?>
	<div id="content">
		<form method="POST" action="/store">
			<fieldset class="form-group">
				<label for="name">Name</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="Name">
			</fieldset>
			<fieldset class="form-group">
				<label for="Email">Email</label>
				<input type="text" class="form-control" id="Email" name="email" placeholder="Email">
			</fieldset>
			<fieldset class="form-group">
				<label for="Password">Password</label>
				<input type="password" class="form-control" id="Password" name="password" placeholder="Password">
			</fieldset>
			<fieldset class="form-group">
				<button type="submit" class="btn btn-primary">Submit</button>
			</fieldset>
		</form>
	</div>
<?php require 'app/views/partials/footer.view.php'; ?>

