<?php
session_start();
include('verification.php');
?>

<h2>HI <?php echo $_SESSION['usuario'] ?></h2>
<h2><a href="logout.php">Sair</a></h2>