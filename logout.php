<?php
session_start();
require_once 'import/middleware.php';
$user = new USER();

if(!$user->is_logged_in())
{
	$user->redirect('login.php');
}

if($user->is_logged_in()!="")
{
	$user->logout();
	$user->redirect('index.php');
}
?>
