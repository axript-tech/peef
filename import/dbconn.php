<?php
//DB details
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'jrrs';

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

    private $host = "localhost";
    private $db_name = "jrrs";
    private $username = "root";
    private $password = "";
    public $conn;

    public function dbConnection()
	{

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