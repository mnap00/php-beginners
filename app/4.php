<?php require "functions.php"; ?>
<?php require "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

			<?php Navigation();?>

		</aside><!--SIDEBAR-->

		<article class="main-content col-xs-8">

		<?php

		/**
		 * Step1: Define a function and make it return a calculation
		 * of 2 numbers.
		 */
		function multiplyNumbers() {
			$number1 = 23;
			$number2 = 78;
			$multiply = $number1 * $number2;
			return $multiply;
		}

		$calculation = multiplyNumbers();
		echo $calculation;

		echo '<br>';

		/**
		 * Step 2: Make a function that passes parameters and call it
		 * using parameter values.
		 */
		function greetSomeone($greet, $who) {
			$say_hello = $greet . ' ' . $who;
			return $say_hello;
		}

		$greetings = greetSomeone('Hello', 'World');
		echo $greetings;

		?>

		</article><!--MAIN CONTENT-->

<?php require "includes/footer.php"; ?>
