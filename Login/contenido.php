<?php session_start();
if (isset($_SESSION['usuario'])) {
	require 'Pagina_Principal_HOPE.html';;
} else {
	header('Location: login.php');
}
?>