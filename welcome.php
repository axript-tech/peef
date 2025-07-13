<?php
include('import/middleware.php');
$pageTitle="Welcome"; 
$user_login = new USER();
$editor_email="";
if($user_login->is_logged_in())
{
$stmt = $user_login->runQuery("SELECT * FROM users WHERE id=:uid");
$stmt->execute(array(":uid"=>$_SESSION['userSession']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$_SESSION["user"]["username"]   =$row['fname'];
$_SESSION["user"]["lastname"]   =$row['lname'];
$_SESSION["user"]["fullname"]   =ucfirst($row['fname']).' '.ucfirst($row['lname']);
$_SESSION["user"]["title"]      =$row['title'];
$_SESSION["user"]["mname"]      =$row['mname'];
$_SESSION["user"]["uemail"]     =$row['email'];
$_SESSION["user"]["country"]    =$row['country'];
$_SESSION["user"]["phone"]      =$row['phone'];
$_SESSION["user"]["address"]    =$row['address'];
$_SESSION["user"]["gender"]     =$row['gender'];
$_SESSION["user"]["dept"]       =$row['dept'];
$_SESSION["user"];;
$count=0;
$user = $_SESSION["user"];
$sql_author= "SELECT * FROM authors WHERE email='".$user['uemail']."'";
        $queryget = mysqli_query($conn, $sql_author) or die("database error:". mysqli_error($conn));
         while( $row2 = mysqli_fetch_row($queryget) ) { 
              $count++;
         }

$userid=$row['id'];
if($row['roleid']=='1')
{
 $role="Chief Editor";
}
elseif($row['roleid']=='2')
{
$role="Editor";
}
elseif($row['roleid']=='3')
{
$role="Reviewer";
}
elseif($row['roleid']=='4')
{
	$role="Author";
}

}

$user = $_SESSION["user"];
$user_login->redirect('./dashboard/index.php');
?>