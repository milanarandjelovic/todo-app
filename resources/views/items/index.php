<div class="container mt-3">
	<div class="row">
		<div class="col-md-10 offset-md-1">
			<div class="card">
				<h3 class="card-header primary-color text-center">
					<a href="<?php echo URL; ?>" class="white-text">Todo App</a>
				</h3>

				<div class="card-body">
					<form action="<?php echo URL . '/item/store/'; ?>" method="post">
						<div class="container">
							<div class="row">
								<div class="col-md-8">
									<div class="md-form text-left">
										<input type="text" id="name" name="name" class="form-control"
										       placeholder="New Item"
										       required
										>
									</div>
								</div>
								<div class="col-md-4">
									<div class="md-form">
										<button type="submit" class="btn btn-default waves-effect waves-light">
											Save
										</button>
									</div>
								</div>
							</div> <!-- /.row -->
						</div>
					</form>

					<?php if ( ! empty($this->todos)) : ?>
						<div class="table-responsive">
							<table class="table">
								<thead>
								<tr>
									<th>#</th>
									<th>Name</th>
									<th>Created at</th>
									<th>Updated at</th>
									<th>Actions</th>
								</tr>
								</thead>
								<?php foreach ($this->todos as $todo) : ?>
								<tbody>
								<tr <?php echo $todo->completed === '1' ? 'class="complete"' : '' ?>>
									<td><span class="id"><?php echo $todo->id; ?></span></td>
									<td>
										<span class="name"><?php echo $todo->name; ?></span>
										<?php if ($todo->completed === '1') : ?>
											<p class="text-danger">Completed at
												<?php echo date('F jS, Y', strtotime($todo->completed_at)); ?>
											</p>
										<?php endif; ?>
									</td>
									<td>
									<span class="created-at">
										<?php echo date('F jS, Y', strtotime($todo->created_at)); ?>
									</span>
									</td>
									<td>
									<span class="updated-at">
										<?php echo date('F jS, Y', strtotime($todo->updated_at)); ?>
									</span>
									</td>
									<td>
										<a href="<?php echo URL . '/item/delete/' . $todo->id; ?>"
										   class="btn btn-sm btn-danger"
										>
											&times;
										</a>
										<?php if ($todo->completed === '0') : ?>
											<a href="<?php echo URL . '/item/completed/' . $todo->id; ?>"
											   class="btn btn-sm btn-success"
											>
												&#10004
											</a>
										<?php endif; ?>
										<?php if ($todo->completed === '1') : ?>
											<a href="<?php echo URL . '/item/uncompleted/' . $todo->id; ?>"
											   class="btn btn-sm btn-success"
											>
												Undo
											</a>
										<?php endif; ?>
										<a href="<?php echo URL . '/item/show/' . $todo->id; ?>"
										   class="btn btn-sm btn-primary"
										>
											Edit
										</a>
									</td>
								</tr>
								<?php endforeach; ?>
								</tbody>
							</table>
						</div> <!-- /.table-responsive -->
					<?php else : ?>
						<div class="alert alert-success no__items" role="alert">
							<p class="text-center"><strong>No items.</strong></p>
						</div>
					<?php endif; ?>

				</div> <!-- /.card-body -->

			</div> <!-- /.card -->
		</div> <!-- /.col-md-10 -->
	</div> <!-- /.row -->
</div> <!-- /.container -->
