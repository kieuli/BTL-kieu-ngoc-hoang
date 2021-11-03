<?php  

function getUser($email, $conn){
   $sql = "SELECT * FROM users 
           WHERE name =?";
   $stmt = $conn->prepare($sql);
   $stmt->execute([$email]);

   if ($stmt->rowCount() === 1) {
   	 $user = $stmt->fetch();
   	 return $user;
   }else {
   	$user = [];
   	return $user;
   }
}