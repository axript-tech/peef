<?php session_start();
require_once "global.php";

require_once 'class.user.php';
$user_login = new USER();
$editor_email="habeeb.bankole@lasu.edu.ng";
if($user_login->is_logged_in())
{
$stmt = $user_login->runQuery("SELECT * FROM users WHERE id=:uid");
$stmt->execute(array(":uid"=>$_SESSION['userSession']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$username=$row['fname'];
$lastname=$row['lname'];
$fullname= ucfirst($row['fname']).' '.ucfirst($row['lname']);
//$usergroup= $row['userGroup'];
$title=$row['title'];
//$middlename =$row['mname'];
$useremail=$row['email'];
$country=$row['country'];
$phone=$row['phone'];
$address=$row['address'];
$gender=$row['gender'];
$dept=$row['dept'];
$subfields= '<span class="label label-success">'.$row['subfield1'].'</span> '.'<span class="label label-warning">'.$row['subfield2'].'</span>'.' <span class="label label-danger">'.$row['subfield3'].'</span>'.' <span class="label label-primary">'.$row['dept'].'</span>';
$count=0;
$sql_author= "SELECT * FROM authors WHERE email='".$useremail."'";
        $queryget = mysqli_query($conn, $sql_author) or die("database error:". mysqli_error($conn));
         while( $row2 = mysqli_fetch_row($queryget) ) { 
              $count++;
         }

$userid=$row['id'];
if($row['roleid']=='1')
{
 $role="Admin";
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

function hide($role){
    if($role != "Admin"){
        echo "style='display:none;'";
    }
}

function hide_login($x){
    if($x)
    {
        echo "style='display:none;'";
    }
}
