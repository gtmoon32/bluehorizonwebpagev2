<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit;
}
// prevent non admin sign in
if ($_SESSION['admin'] == FALSE) {
    header('Location: index.php');
    exit;
}
?>

