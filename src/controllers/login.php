<?php
    
    session_start();

	if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email      =       $_POST["email"];
    $password   =       $_POST["password"];
    
    // QUY TRÌNH 4 bước:
    // Bước 01:
    include('../config/Config.php');


    // Bước 02: Xử lý truy vấn
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($con,$sql);
    $password2  =   md5($password);
    if(mysqli_num_rows($result) > 0){
        // Lấy mật khẩu ra
        $row=mysqli_fetch_assoc($result);
        $pass_hash = $row['password'];
        $activated = $row['activated'];
		$permission = $row['permission'];
		$name 		= $row['name'];
        $templates = $row['templates'];
        if($activated ==1){
        
            if( md5($password) == $pass_hash ){
                $_SESSION["account"] = $email;
                $_SESSION["name"] = $name;
					if($permission == 1){
						header("location: ../admin/index.php");
					}
                    if($permission == 0){
                        if($templates == 0){
                            header("../home.php");
                        }
                        else if($templates == 1){
                            header("../template/template1.php");
                            }
                        else if($templates == 2){
                             header("../template/template2.php");
                        }
                        else if($templates == 3){
                            header("../template/template3.php");
                        }
                        else if($templates == 4){
                            header("../template/template3.php");
                            }
                    
                        
					}
            
            }else{
                echo "Kiểm tra lại Mật khẩu";
            }
            }else{
                echo "Tài khoản của bạn chưa được kích hoạt. Vui lòng đăng nhập gmail để kích hoạt tài khoản !";
            }
    }else{
        echo "Email không tồn tại";
    }
}


?>
