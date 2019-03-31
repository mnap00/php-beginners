<?php require "functions.php"; ?>
<?php require "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

			<?php Navigation();?>

		</aside><!--SIDEBAR-->

		<article class="main-content col-xs-8">

		<?php


		/**
		 * Step1: Use a pre-built math function here and echo it.
		 */
		echo decbin(42);
		echo '<br>';

		/**
		 * Step 2: Use a pre-built string function here and echo it.
		 */
		$string = 'Hello World';
		echo str_rot13($string);
		echo '<br>';

		/**
		 * Step 3: Use a pre-built Array function here and echo it.
		 */
		$values = [345, 362, 9789, 4537, 66224];
		echo array_sum($values);
		echo '<br>';

		?>

		</article><!--MAIN CONTENT-->

<?php require "includes/footer.php"; ?>
