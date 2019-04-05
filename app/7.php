<?php require "functions.php"; ?>
<?php require "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

			<?php Navigation();?>

		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">

		<?php
		/**
		 * Step 1 - Create a database in PHPmyadmin.
		 *
		 * Step 2 - Create a table like the one from the lecture.
		 *
		 * Step 3 - Insert some Data.
		 *
		 * Step 4 - Connect to Database and read data.
		 */
		$link = mysqli_connect('localhost', 'root', '', '7app');

		if (!$link) {
			die('Database connection failed!');
		}

		$query = 'SELECT * FROM users';

		$result = mysqli_query($link, $query);

		if (!$result) {
			die('Query failed!' . '<br>' . mysqli_error($link));
		}

		while ($row = mysqli_fetch_assoc($result)) {
			print $row['username'];
			print '<pre>';
			print_r($row);
			print '</pre>';
		}

		?>

		</article><!--MAIN CONTENT-->

<?php require "includes/footer.php"; ?>
