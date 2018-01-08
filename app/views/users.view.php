<?php require 'app/views/partials/header.view.php'; ?>

	<div id="content">
		<fieldset class="form-group">
			<a href="/create" class="btn btn-primary pull-right form-group">Add User</a>
		</fieldset>
		<fieldset class="form-group">
			<table class="table">
				<thead>
					<tr>
						<th class="row-1 row-id">#.</th>
						<th class="row-2 row-name">Name</th>
						<th class="row-3 row-email">Email</th>
						<th class="row-4 row-created-at">Created_at</th>
						<th class="row-5 row-actions">Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($users as $user) : ?>
						<tr>
							<td><?= $user->id; ?></td>
							<td><?= $user->name; ?></td>
							<td><?= $user->email; ?></td>
							<td><?= $user->created_at; ?></td>
							<td>
								<a href="/update/?id=1" class="btn btn-xs btn-primary">Update</a>
								<a href="#" class="btn btn-xs btn-danger">Delete</a>
							</td>
						</tr>
					<?php endforeach; ?>	
				</tbody>
			</table>
		</fieldset>
	</div>

<?php require 'app/views/partials/footer.view.php'; ?>