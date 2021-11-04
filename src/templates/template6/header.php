
<!DOCTYPE html>
<html lang="en">

<head>

<title>My blog</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
	<script defer src="../assets/fontawesome/js/all.min.js"></script>
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="../assets/css/theme-6.css">

</head>

<body>
<header class="header text-center">	    
	    <h1 class="blog-name pt-lg-4 mb-0"><a class="no-text-decoration" class="text-end fst-italic "><?php echo $_SESSION['name']; ?></a></h1>
        
	    <nav class="navbar navbar-expand-lg navbar-dark" >
           
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column" >
				<div class="profile-section pt-3 pt-lg-0">
				    <img class="profile-image mb-3 rounded-circle mx-auto" src="../assets/images/avt.png" alt="image" >			
					
				
                    <a href="../chat/" class="btn btn block"><i class="fab fa-facebook-messenger"></i> Inbox</a>
					<ul class="social-list list-inline py-3 mx-auto">
			            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
						
			        </ul><!--//social-list-->
			        <hr> 
				</div><!--//profile-section-->
				
				<ul class="navbar-nav flex-column text-start">
					<li class="nav-item">
                    <a class="nav-link active" href="index.php"><i class="fas fa-home fa-fw me-2"></i>Blog Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
					    <a class="nav-link active" href="index.php?controller=blog/list"><i class="fas fa-bookmark fa-fw me-2"></i>Blog Post</a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="about.php"><i class="fas fa-user fa-fw me-2"></i>About Me</a>
					</li>
					
					<li>
                        <a href="../../controllers/logout.php" class="nav-link"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
				</ul>
				
				
			</div>
		</nav>
    </header>

    <div id="wrapper">

       
        <div id="page-wrapper">

            <div class="container-fluid">

                <?php 
                	if(file_exists($controller))
                		include $controller;
                ?>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../public/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../public/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../public/js/plugins/morris/raphael.min.js"></script>
    <script src="../public/js/plugins/morris/morris.min.js"></script>
    <script src="../public/js/plugins/morris/morris-data.js"></script>

</body>

</html>
