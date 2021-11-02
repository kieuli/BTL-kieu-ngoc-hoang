<?php 
		session_start();
    if(!isset($_SESSION["name"]))

	header("location:login.php"); 
	?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
  <title>Blog cá nhân H-K-N</title>
  <link rel="stylesheet" href="../src/style.css">
</head>
<body>
  <div class="app">
    <header>
      <div class="nav">
        <a class="nav__logo" href="">
          <img src="img/HKN.jpg" alt="">
        </a>
        <ul class="nav__menu">
          <li class="nav__menu-items">
            <a class="nav__menu-items-link" href="">Bài viết </a>
          </li>
          <li class="nav__menu-items nav__menu-2">
            <a class="nav__menu-items-link" href="">Mẫu </a>
            <svg width="12px" height="6px" viewBox="0 0 12 6" xmlns="http://www.w3.org/2000/svg">
              <polygon fill="#1F303C" points="5 5.7 0 0.7 0.7 0 5 4.4 9.3 0 10 0.7 "></polygon>
          </svg>
        
          </li>
          <li class="nav__menu-items">
            <a class="nav__menu-items-link" href="">Trợ giúp</a>
          </li>
        </ul>
        
        <a href="" class="user">
            <p class="text-end fst-italic "><?php echo $_SESSION['name']; ?></p>
            <a href="controllers/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
            </a>
      </div>
    </header>
    <div id="root">
      <div class="sidebar">
        <nav>
          <form class="form__search">
            <div class="search">
              <i class="fas fa-search icon__search"></i>
              <input class="input__search" type="text" placeholder="Tìm kiếm ">
            </div>
          </form>
          <div class="bar__title">MỚI!</div>
          <ul class="sidebar__menu">
            <li class="sidebar__menu-items">
              <a class="sidebar__menu-items-link" href=""><span>mẫu xanh lá</span></a>
            </li>
            <li class="sidebar__menu-items">
              <a class="sidebar__menu-items-link" href=""><span>mẫu cam </span></a>
            </li>
            <li class="sidebar__menu-items">
              <a class="sidebar__menu-items-link" href=""><span>Mẫu xanh lục </span></a>
            </li>
            <li class="sidebar__menu-items">
              <a class="sidebar__menu-items-link" href=""><span>Mẫu đỏ  </span></a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="main">
        <div class="grid">
          <div class="wide">
            <h1 data-hook="title" class="_1F0Ne">Chọn mẫu trang web Blog cá nhân <br>
              mà bạn yêu thích</h1>
            <div class="row">
              <div class="col l-4 c-4 m-1">
                <a href="templates/template1">
                  <div class="content">
                    <img src="../src/img/Untitled.png" alt="template1">
                    
                  </div>
                </a>
              </div>
              <div class="col l-4 c-4 m-1">
                <a href="templates/template2">
                  <div class="content">
                    <img src="../src/img/Untitled.png" alt="template2">
                  </div>
                </a>
              </div>
              <div class="col l-4 c-4 m-1">
                <a href="templates/template3">
                  <div class="content">
                    <img src="../src/img/Untitled.png" alt="template3">
                  </div>
                </a>
              </div>
              <div class="col l-4 c-4 m-1">
                <a href="templates/template4">
                  <div class="content">
                    <img src="../src/img/Untitled.png" alt="template4">
                  </div>
                </a>
              </div>
              <div class="col l-4 c-4 m-1">
                <a href="">
                  <div class="content">
                    <img src="../src/img/Untitled.png" alt="template5">
                  </div>
                </a>
              </div>
              <div class="col l-4 c-4 m-1">
                <a href="">
                  <div class="content">
                    <img src="../src/img/Untitled.png" alt="template6">
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="./Asset/active.js"></script>
</body>
</html>