<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include 'PHPMailer.php';
include 'SMTP.php';
include 'Exception.php';

class USER
{

	private $conn;

	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }

	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}

	public function lasdID()
	{
		$stmt = $this->conn->lastInsertId();
		return $stmt;
	}

	public function register($title,$fname, $lname, $mname, $uemail,$upass,$code, $phone, $country, $org, $gender, $field, $usergroup)
	{
		try
		{
			$ucreated=date('Y-m-d H:i:s');
			$password = $upass;
			$pic="avatar.png";
			$roleid="4";
			$stmt = $this->conn->prepare("INSERT INTO users(title, fname, lname, mname, roleid, email,password,tokenCode, gender, phone, address, dept, country, created, modified, userGroup)
			                                             VALUES(:title,:fname,:lname, :mname, :roleid, :user_mail, :user_pass, :active_code, :gender, :phone, :address, :dept, :country, :created, :modified, :userGroup)");
			$stmt->bindparam(":title",$title);
			$stmt->bindparam(":fname",$fname);
			$stmt->bindparam(":lname",$lname);
			$stmt->bindparam(":mname",$mname);
			$stmt->bindparam(":roleid",$roleid);
			$stmt->bindparam(":user_mail",$uemail);
			$stmt->bindparam(":user_pass",$password);
			$stmt->bindparam(":active_code",$code);
			$stmt->bindparam(":gender",$gender);
			$stmt->bindparam(":phone",$phone);
			$stmt->bindparam(":address",$org);
			$stmt->bindparam(":dept",$field);
			$stmt->bindparam(":userGroup",$usergroup);
			$stmt->bindparam(":country",$country);
			$stmt->bindparam(":created",$ucreated);
			$stmt->bindparam(":modified",$ucreated);
			$stmt->execute();
			return $stmt;
		}
		catch(PDOException $ex)
		{
			echo $ex->getMessage();
		}
	}

	public function login($email,$upass)
	{
		try
		{
			$stmt = $this->conn->prepare("SELECT * FROM customers WHERE email=:email_id");
			$stmt->execute(array(":email_id"=>$email));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

			if($stmt->rowCount() == 1)
			{
				if($userRow['userStatus']=="Y")
				{
					if($userRow['password']==$upass)
					{
						$_SESSION['userSession'] = $userRow['id'];
						return true;
					}
					else
					{
						header("Location: login.php?error");
						exit;
					}
				}
				else
				{
					header("Location: login.php?inactive");
					exit;
				}
			}
			else
			{
				header("Location: login.php?error");
				exit;
			}
		}
		catch(PDOException $ex)
		{
			echo $ex->getMessage();
		}
	}


	public function is_logged_in()
	{
		if(isset($_SESSION['userSession']))
		{
			return true;
		}
	}

	public function redirect($url)
	{
		header("Location: $url");
	}

	public function logout()
	{
		session_destroy();
		$_SESSION['userSession'] = false;
	}

	function send_mail($email,$message,$subject)
	{
		
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPDebug  = 0;
		$mail->SMTPAuth   = true;
		$mail->SMTPSecure = "ssl";
		$mail->Host       = "smtp.hostinger.com";
		$mail->Port       = 465;
		$mail->AddAddress($email);
		$mail->Username="info@lasufosic.com";
		$mail->Password="adminFOSIC123.";
		$mail->SetFrom('info@lasufosic.com','LASUFOSIC');
		$mail->AddReplyTo("info@lasufosic.com","Add");
		$mail->Subject    = $subject;
		$mail->MsgHTML($message);
		$mail->Send();
	}
}

?>