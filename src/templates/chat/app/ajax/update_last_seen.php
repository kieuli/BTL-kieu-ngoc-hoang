<?php  

session_start();

# check if the user is logged in
if (isset($_SESSION['name'])) {
	
	# database connection file
	include '../../../../config/Config.php';

	# get the logged in user's email from SESSION
	$id = $_SESSION['id'];

	$sql = "UPDATE users
	        SET last_seen = NOW() 
	        WHERE id = ?";
	$stmt = $conn->prepare($sql);
	$stmt->execute([$id]);

}else {
	header("Location: ../../index.php");
	exit;
}