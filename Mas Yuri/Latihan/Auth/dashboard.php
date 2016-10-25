<?php
	session_start();
?>
<?php if (isset($_SESSION['userdata'])) : ?>
		<h1>Selamat datang di dashboard Cendana</h1>

		<a href="logout.php">logout</a>
<?php else : ?>
	maaf dilarang masuk, <a href="login.php">kembali</a>
<?php endif; ?>