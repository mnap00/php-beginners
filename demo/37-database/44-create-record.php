<?php include 'db.php'; ?>
<?php include 'functions.php'; ?>

<?php include 'includes/header.php'; ?>

	<div class="container">
		<div class="col-xs-6">

			<h1 class="text-center mt-3">Create Record</h1>

			<form action="44-create-record.php" method="post">
				<div class="form-group">
					<label for="username">Username</label>
					<input class="form-control" type="text" name="username">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input class="form-control" type="password" name="password">
				</div>
				<input class="btn btn-primary" type="submit" value="CREATE" name="submit">
			</form>

			<?php create_rows(); ?>

		</div>
	</div>

<?php include 'includes/footer.php'; ?>
