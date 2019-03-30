<?php require "functions.php"; ?>
<?php require "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

			<?php Navigation();?>

		</aside><!--SIDEBAR-->

		<article class="main-content col-xs-8">

		<?php

		/**
		 * Step 1: Make an if statement with elseif and else
		 * to finally display string saying, I love PHP.
		 */
		$lang = 'PHP';
		if ($lang == 'JavaScript') {
			echo 'I love JavaScript';
		} elseif ($lang = 'PHP') {
			echo 'I love PHP';
		} else {
			echo 'I don\'t know that language';
		}
		echo '<br>';

		/**
		 * Step 2: Make a for loop that displays 10 numbers.
		 */
		for ($i = 1; $i <= 10; $i++) {
			echo $i . '<br>';
		}

		/**
		 * Step 3: Make a switch statement that test againts
		 * one condition with 5 cases.
		 */
		$grass = 'green';

		switch ($grass) {
			case 'yellow':
				echo 'the grass is yellow';
				break;
			case 'green':
				echo 'the grass is green';
				break;
			case 'white':
				echo 'the grass is white';
				break;
			case 'black':
				echo 'the grass is black';
				break;
			case 'red':
				echo 'the grass is red';
				break;
			default:
				echo 'there is no grass';
		}

		?>

		</article><!--MAIN CONTENT-->

<?php require "includes/footer.php"; ?>
