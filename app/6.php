<?php require "functions.php"; ?>
<?php require "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

			<?php Navigation();?>

		</aside><!--SIDEBAR-->

		<article class="main-content col-xs-8">

			<form action="6.php" method="post">
				<input id="search" type="search" name="search">
				<input type="submit" value="Search" name="submit">
			</form>

		<?php

		/**
		 * Step1: Make a form that submits one value to POST super global
		 */
		if (isset($_POST['submit'])) {
			$string = $_POST['search'];

			echo 'Database was searched for ' . $string . '.';
		}

		?>

		</article><!--MAIN CONTENT-->

<?php require "includes/footer.php"; ?>
