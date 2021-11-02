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
  <title>Blog cá nhân</title>
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
            <a class="nav__menu-items-link" href="">Trang chủ</a>
          </li>
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
        <div class="user">
          <div class="content__language">
            <ul class="menu__child menu__child2">
              <li class="menu__child-items">
                <a class="menu__child-items-link" href="">
                  lo
                </a>
              </li>
              <li class="menu__child-items">
                <a class="menu__child-items-link" href="">
                  English
                </a>
              </li>
              <li class="menu__child-items">
                <a class="menu__child-items-link" href="">
                  English
                </a>
              </li>
              <li class="menu__child-items">
                <a class="menu__child-items-link" href="">
                  English
                </a>
              </li>
              <li class="menu__child-items">
                <a class="menu__child-items-link" href="">
                  English
                </a>
              </li>
              <li class="menu__child-items">
                <a class="menu__child-items-link" href="">
                  English
                </a>
              </li>
              <li class="menu__child-items">
                <a class="menu__child-items-link" href="">
                  English
                </a>
              </li>
              <li class="menu__child-items">
                <a class="menu__child-items-link" href="">
                  English
                </a>
              </li>
              <li class="menu__child-items">
                <a class="menu__child-items-link" href="">
                  English
                </a>
              </li>
              <li class="menu__child-items">
                <a class="menu__child-items-link" href="">
                  English
                </a>
              </li>
              <li class="menu__child-items">
                <a class="menu__child-items-link" href="">
                  English
                </a>
              </li>
              <li class="menu__child-items">
                <a class="menu__child-items-link" href="">
                  English
                </a>
              </li>
              <li class="menu__child-items">
                <a class="menu__child-items-link" href="">
                  English
                </a>
              </li>
              <li class="menu__child-items">
                <a class="menu__child-items-link" href="">
                  English
                </a>
              </li>
            </ul>
          </div>
        </div>
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
          <div class="bar__title">Xem theo</div>
          <ul class="sidebar__menu">
            <li class="sidebar__menu-items">
              <a class="sidebar__menu-items-link" href=""><span>MỚI!</span></a>
            </li>
            <li class="sidebar__menu-items">
              <a class="sidebar__menu-items-link" href=""><span>Phổ biến nhất</span></a>
            </li>
            <li class="sidebar__menu-items">
              <a class="sidebar__menu-items-link" href=""><span>Mẫu màu xanh </span></a>
            </li>
          </ul>
          <div class="bar__title md">Danh mục</div>
          <ul class="sidebar__menu">
            <li class="sidebar__menu-items">
              <a class="sidebar__menu-items-link" href=""><span>Xem tất cả mẫu</span></a>
            </li>
            <li class="sidebar__menu-items">
              <div class="items__title">
                <label>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 12" fill="currentColor" width="1em" height="1em"><style></style><path fill-rule="evenodd" clip-rule="evenodd" d="M6 6L.6 0 0 .6 4.9 6 .1 11.4l.5.6z"></path></svg>
                </label>
                <a class="sidebar__menu-items-link" href=""><span>Mẫu màu cam </span></a>
              </div>
              <!-- <ul class="bar__menuChild">
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
              </ul> -->
            </li>
            <li class="sidebar__menu-items">
              <div class="items__title">
                <label>
                  <svg class="icon__active" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 12" fill="currentColor" width="1em" height="1em"><style></style><path fill-rule="evenodd" clip-rule="evenodd" d="M6 6L.6 0 0 .6 4.9 6 .1 11.4l.5.6z"></path></svg>
                </label>
                <a class="sidebar__menu-items-link" href=""><span>Phổ biến nhất</span></a>
              </div>
              <ul class="bar__menuChild bar__menuChild-active">
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Mẫu nền xanh lá </span>
                  </a>
                </li>
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Mẫu nền màu tím </span>
                  </a>
                </li>
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Mẫu nền xanh dương </span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="sidebar__menu-items">
              <div class="items__title">
                <label>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 12" fill="currentColor" width="1em" height="1em"><style></style><path fill-rule="evenodd" clip-rule="evenodd" d="M6 6L.6 0 0 .6 4.9 6 .1 11.4l.5.6z"></path></svg>
                </label>
                <a class="sidebar__menu-items-link" href=""><span>Phổ biến nhất</span></a>
              </div>
              <ul class="bar__menuChild">
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="sidebar__menu-items">
              <div class="items__title">
                <label>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 12" fill="currentColor" width="1em" height="1em"><style></style><path fill-rule="evenodd" clip-rule="evenodd" d="M6 6L.6 0 0 .6 4.9 6 .1 11.4l.5.6z"></path></svg>
                </label>
                <a class="sidebar__menu-items-link" href=""><span>Phổ biến nhất</span></a>
              </div>
              <ul class="bar__menuChild">
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="sidebar__menu-items">
              <div class="items__title">
                <label>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 12" fill="currentColor" width="1em" height="1em"><style></style><path fill-rule="evenodd" clip-rule="evenodd" d="M6 6L.6 0 0 .6 4.9 6 .1 11.4l.5.6z"></path></svg>
                </label>
                <a class="sidebar__menu-items-link" href=""><span>Phổ biến nhất</span></a>
              </div>
              <ul class="bar__menuChild">
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="sidebar__menu-items">
              <div class="items__title">
                <label>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 12" fill="currentColor" width="1em" height="1em"><style></style><path fill-rule="evenodd" clip-rule="evenodd" d="M6 6L.6 0 0 .6 4.9 6 .1 11.4l.5.6z"></path></svg>
                </label>
                <a class="sidebar__menu-items-link" href=""><span>Phổ biến nhất</span></a>
              </div>
              <ul class="bar__menuChild">
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="sidebar__menu-items">
              <div class="items__title">
                <label>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 12" fill="currentColor" width="1em" height="1em"><style></style><path fill-rule="evenodd" clip-rule="evenodd" d="M6 6L.6 0 0 .6 4.9 6 .1 11.4l.5.6z"></path></svg>
                </label>
                <a class="sidebar__menu-items-link" href=""><span>Phổ biến nhất</span></a>
              </div>
              <ul class="bar__menuChild">
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="sidebar__menu-items">
              <div class="items__title">
                <label>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 12" fill="currentColor" width="1em" height="1em"><style></style><path fill-rule="evenodd" clip-rule="evenodd" d="M6 6L.6 0 0 .6 4.9 6 .1 11.4l.5.6z"></path></svg>
                </label>
                <a class="sidebar__menu-items-link" href=""><span>Phổ biến nhất</span></a>
              </div>
              <ul class="bar__menuChild">
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="sidebar__menu-items">
              <div class="items__title">
                <label>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 12" fill="currentColor" width="1em" height="1em"><style></style><path fill-rule="evenodd" clip-rule="evenodd" d="M6 6L.6 0 0 .6 4.9 6 .1 11.4l.5.6z"></path></svg>
                </label>
                <a class="sidebar__menu-items-link" href=""><span>Phổ biến nhất</span></a>
              </div>
              <ul class="bar__menuChild">
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="sidebar__menu-items">
              <div class="items__title">
                <label>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 12" fill="currentColor" width="1em" height="1em"><style></style><path fill-rule="evenodd" clip-rule="evenodd" d="M6 6L.6 0 0 .6 4.9 6 .1 11.4l.5.6z"></path></svg>
                </label>
                <a class="sidebar__menu-items-link" href=""><span>Phổ biến nhất</span></a>
              </div>
              <ul class="bar__menuChild">
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="sidebar__menu-items">
              <div class="items__title">
                <label>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 12" fill="currentColor" width="1em" height="1em"><style></style><path fill-rule="evenodd" clip-rule="evenodd" d="M6 6L.6 0 0 .6 4.9 6 .1 11.4l.5.6z"></path></svg>
                </label>
                <a class="sidebar__menu-items-link" href=""><span>Phổ biến nhất</span></a>
              </div>
              <ul class="bar__menuChild">
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="sidebar__menu-items">
              <div class="items__title">
                <label>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 12" fill="currentColor" width="1em" height="1em"><style></style><path fill-rule="evenodd" clip-rule="evenodd" d="M6 6L.6 0 0 .6 4.9 6 .1 11.4l.5.6z"></path></svg>
                </label>
                <a class="sidebar__menu-items-link" href=""><span>Phổ biến nhất</span></a>
              </div>
              <ul class="bar__menuChild">
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="sidebar__menu-items">
              <div class="items__title">
                <label>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 12" fill="currentColor" width="1em" height="1em"><style></style><path fill-rule="evenodd" clip-rule="evenodd" d="M6 6L.6 0 0 .6 4.9 6 .1 11.4l.5.6z"></path></svg>
                </label>
                <a class="sidebar__menu-items-link" href=""><span>Phổ biến nhất</span></a>
              </div>
              <ul class="bar__menuChild">
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="sidebar__menu-items">
              <div class="items__title">
                <label>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 12" fill="currentColor" width="1em" height="1em"><style></style><path fill-rule="evenodd" clip-rule="evenodd" d="M6 6L.6 0 0 .6 4.9 6 .1 11.4l.5.6z"></path></svg>
                </label>
                <a class="sidebar__menu-items-link" href=""><span>Phổ biến nhất</span></a>
              </div>
              <ul class="bar__menuChild">
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="sidebar__menu-items">
              <div class="items__title">
                <label>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 12" fill="currentColor" width="1em" height="1em"><style></style><path fill-rule="evenodd" clip-rule="evenodd" d="M6 6L.6 0 0 .6 4.9 6 .1 11.4l.5.6z"></path></svg>
                </label>
                <a class="sidebar__menu-items-link" href=""><span>Phổ biến nhất</span></a>
              </div>
              <ul class="bar__menuChild">
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
                <li class="bar__menuChild-item">
                  <a class="sidebar__menu-items-link bar__menuChild-item-link" href="">
                    <span>Tư vấn và huấn luyện</span>
                  </a>
                </li>
              </ul>
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
                <a href="">
                  <div class="content">
                    <img src="../src/img/Untitled.png" alt="">
                    
                  </div>
                </a>
              </div>
              <div class="col l-4 c-4 m-1">
                <a href="">
                  <div class="content">
                    <img src="../src/img/Untitled.png" alt="">
                  </div>
                </a>
              </div>
              <div class="col l-4 c-4 m-1">
                <a href="">
                  <div class="content">
                    <img src="../src/img/Untitled.png" alt="">
                  </div>
                </a>
              </div>
              <div class="col l-4 c-4 m-1">
                <a href="">
                  <div class="content">
                    <img src="../src/img/Untitled.png" alt="">
                  </div>
                </a>
              </div>
              <div class="col l-4 c-4 m-1">
                <a href="">
                  <div class="content">
                    <img src="../src/img/Untitled.png" alt="">
                  </div>
                </a>
              </div>
              <div class="col l-4 c-4 m-1">
                <a href="">
                  <div class="content">
                    <img src="../src/img/Untitled.png" alt="">
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