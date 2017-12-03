<div class="container mt-3">
	<div class="row">
		<div class="col-md-10 offset-md-1">
			<div class="card">
				<h3 class="card-header primary-color text-center">
					<a href="<?php echo URL; ?>" class="white-text">Todo App</a>
				</h3>

				<div class="card-body">
					<form action="<?php echo URL . '/item/update/' . $this->todo->id; ?>" method="post">
						<div class="container">
							<div class="row">
								<div class="col-md-8">
									<div class="md-form text-left">
										<input type="text" id="name" name="name" class="form-control"
										       value="<?php echo $this->todo->name; ?>"
										       placeholder="New Item"
										>
									</div>
								</div>
								<div class="col-md-4">
									<div class="md-form">
										<button type="submit" class="btn btn-default waves-effect waves-light">
											Update
										</button>
									</div>
								</div>
							</div> <!-- /.row -->
						</div>
					</form>

				</div> <!-- /.card-body -->

			</div> <!-- /.card -->
		</div> <!-- /.col-md-10 -->
	</div> <!-- /.row -->
</div> <!-- /.container -->
