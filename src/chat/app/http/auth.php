<?php  
session_start();

# check if name & password  submitted
if(isset($_POST['email']) &&
   isset($_POST['password'])){

   # database connection file
   include '../db.conn.php';
   
   # get data from POST request and store them in var
   $password = $_POST['password'];
   $name = $_POST['email'];
   
   #simple form Validation
   if(empty($name)){
      # error message
      $em = "name is required";

      # redirect to 'index.php' and passing error message
      header("Location: ../../index.php?error=$em");
   }else if(($password)){
      # error message
      $em = "Password is required";

      # redirect to 'index.php' and passing error message
      header("Location: ../../index.php?error=$em");
   }else {
      $sql  = "SELECT * FROM 
               users WHERE email=?";
      $stmt = $conn->prepare($sql);
      $stmt->execute([$name]);

      # if the name is exist
      if($stmt->rowCount() === 1){
        # fetching user data
        $user = $stmt->fetch();

        # if both name's are strictly equal
        if ($user['name'] === $name) {
           
           # verifying the encrypted password
          if (md5($password, $user['password'])) {

            # successfully logged in
            # creating the SESSION
            $_SESSION['email'] = $user['email'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['id'] = $user['id'];

            # redirect to 'home.php'
            header("Location: ../../home.php");

          }else {
            # error message
            $em = "Incorect name or password";

            # redirect to 'index.php' and passing error message
            header("Location: ../../index.php?error=$em");
          }
        }else {
          # error message
          $em = "Incorect name or password";

          # redirect to 'index.php' and passing error message
          header("Location: ../../index.php?error=$em");
        }
      }
   }
}else {
  header("Location: ../../index.php");
  exit;
}