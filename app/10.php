<?php require "functions.php"; ?>
<?php require "includes/header.php";?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>

	</aside><!--SIDEBAR-->

	<article class="main-content col-xs-8">

	<?php

	/**
	 * Step 1: Use the Make a class called Dog.
	 *
	 * Step 2: Set some properties for Dog, Example,
	 * eye colors, nose, or fur color.
	 *
	 * Step 4: Make a method named ShowAll that echos all the properties.
	 *
	 * Step 5: Instantiate the class / create object and call it pitbull.
	 *
	 * Step 6: Call the method ShowAll.
	 */
	class Dog {

		var $eye = 'brown';
		var $nose = 'pink';
		var $fur = 'brown';

		function showAll() {
			echo 'Eye color is: ' . $this->eye . '<br>';
			echo 'Nose color is: ' . $this->nose . '<br>';
			echo 'Fur color is: ' . $this->fur . '<br>';
		}
	}

	$pitbull = new Dog;

	$pitbull->showAll();

	?>

	</article><!--MAIN CONTENT-->

<?php require "includes/footer.php"; ?>
