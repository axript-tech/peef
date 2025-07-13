<?php
$appName = "PEEF";
$appUrl="https://www.peef.ng";
$appFullName  = "The People Expertise and Excellence Foundation (PEEF)";
$appDeveloper ="Axript Tech";
$appDeveloperUrl ="https://www.axript.com.ng";
$pageTitle    = "";
$currentYear = date("Y"); 
$appDeveloperUrl = "https://axript.com.ng";
$appDeveloper = "Axript Tech";
$appName= "PEEF";
$appLogo="PEEF";
$appLogoUrl="resources/assets/img/jrrs3.png";
$developerName = "Axript Tech";
$appBaseUrl = "https://www.peef.ng";

?>

<?php
//DB details

if($_SERVER["REMOTE_ADDR"]=="::1"){
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'jrrs';
    $site="http://localhost/";
}else{
    $dbHost     = 'localhost';
    $dbUsername  = 'u393855230_jrrslasu';
    $dbPassword = 'dK8izP3Z';
    $dbName = 'u393855230_jrrslasu';
    $site="http://jrrslasu.com/";
}


 

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Unable to connect database: " . $db->connect_error);
}
?>
<?php
$connection = new PDO( 'mysql:host=localhost;dbname='.$dbName, $dbUsername, $dbPassword );

?>
<?php

$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName ) or die("Connection failed: " . mysqli_connect_error());

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
<?php

class Database
{


    private $host;
    private $db_name;
    private $username;
    private $password;
    public $conn;

    public function dbConnection()
	{
        if($_SERVER["REMOTE_ADDR"]=="::1"){
            $this->host = 'localhost';
            $this->db_name = 'jrrs';
            $this->username = 'root';
            $this->password = '';
        }else{
            $this->host     = 'localhost';
            $this->db_name  = 'u393855230_jrrslasu';
            $this->username = 'u393855230_jrrslasu';
            $this->password = 'dK8izP3Z';
            //$site="http://jrrslasu.com/";
        }
	    $this->conn = null;
        try
		{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
		catch(PDOException $exception)
		{
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>
<?php
    $db_host = $dbHost;
    $db_name = $dbName;
    $db_user = $dbUsername;
    $db_pass = $dbPassword;
    /*try{

        $db = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }*/

?>