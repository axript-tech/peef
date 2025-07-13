<?php

if($user_login->is_logged_in()!="")
{
  $user_login->redirect('index.php');
}
?>


