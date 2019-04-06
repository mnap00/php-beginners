<?php require "functions.php"; ?>
<?php require "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

			<?php Navigation();?>

		</aside><!--SIDEBAR-->

		<article class="main-content col-xs-8">

		<?php

		/**
		 * Step 1 - Make a variable with some text as value.
		 *
		 * Step 2 - Use crypt() function to encrypt it.
		 *
		 * Step 3 - Assign the crypt result to a variable.
		 *
		 * Step 4 - echo the variable.
		 */
		$plaintext = 'secret phrase';

		$cipher = '$2y$';
		$rounds = '10$';
		$salt = substr(strtr(base64_encode(openssl_random_pseudo_bytes(16)), '+', '.'), 0, 22);
		$crypt = $cipher . $rounds . $salt;

		// password_hash() should be used instead
		$encrypted = crypt($plaintext, $crypt);

		echo $encrypted;

		?>

		</article><!--MAIN CONTENT-->

<?php require "includes/footer.php"; ?>
