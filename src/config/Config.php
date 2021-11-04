<?php

	$con = mysqli_connect("http://185.27.134.10/","sql112.epizy.com","u6zfC1rDLrWBt","epiz_30281102_XXX") or die("Can not connect to MySQL");
	mysqli_set_charset($con,"UTF8");

 ?>
<?php 

# server name
$sName = "http://185.27.134.10/";
# user name
$uName = "sql112.epizy.com";
# password
$pass = "u6zfC1rDLrWBt";

# database name
$db_name = "epiz_30281102_XXX";

#creating database connection
try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}