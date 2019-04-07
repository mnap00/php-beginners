<?php require "functions.php"; ?>
<?php require "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

			<?php Navigation();?>

		</aside><!--SIDEBAR-->

		<article class="main-content col-xs-8">

		<?php

		/**
		 * Create a link saying Click Here, and set
		 * the link href to pass some parameters and use
		 * the GET super global to see it.
		 */
		$parameter = 'parameter';

		if (isset($_GET['some'])) {
			echo $_GET['some'] . '<br>';
		}

		?>
		<a href="9.php?some=<?php echo $parameter; ?>">CLICK HERE</a>
		<br>
		<?php

		/**
		 * Step 2 - Set a cookie that expires in one week.
		 */
		$name = 'cookie';
		$value = 'one-week-cookie';
		$expires = time() + (60 * 60 * 24 * 7);

		setcookie($name, $value, $expires);

		if (isset($_COOKIE['cookie'])) {
			echo $_COOKIE['cookie'] . '<br>';
		}

		/**
		 * Step 3 - Start a session and set it to value, any value you want.
		 */
		session_start();
		$_SESSION['value'] = 'any';

		if (isset($_SESSION['value'])) {
			echo $_SESSION['value'] . '<br>';
		}

		?>

		</article><!--MAIN CONTENT-->

<?php require "includes/footer.php"; ?>
