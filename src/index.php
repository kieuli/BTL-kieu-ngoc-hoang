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
        <div class="language">
          <div class="content__language">
            <ul class="menu__child menu__child2">
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
              <li class="menu__child-items">
                <a class="menu__child-items-link" href="">
                  English
                </a>
              </li>
            </ul>
          </div>
          <div class="ico__language">
            <svg width="17px" height="17px" viewBox="0 0 17 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <path fill="#43515c" d="M9.8646,14.853 C10.6986,13.834 11.3396,12.478 11.6916,11 L14.4986,11 C13.6876,12.939 11.9626,14.403 9.8646,14.853 L9.8646,14.853 Z M2.5016,11 L5.3086,11 C5.6606,12.478 6.3016,13.834 7.1356,14.853 C5.0376,14.403 3.3126,12.939 2.5016,11 L2.5016,11 Z M7.1356,2.147 C6.3016,3.166 5.6606,4.521 5.3086,6 L2.5016,6 C3.3126,4.061 5.0376,2.597 7.1356,2.147 L7.1356,2.147 Z M10.6676,6 L6.3316,6 C6.7436,4.412 7.5136,2.998 8.4996,2.14 C9.4866,2.998 10.2566,4.412 10.6676,6 L10.6676,6 Z M1.9996,8.5 C1.9996,7.983 2.0676,7.482 2.1816,7 L5.1206,7 C5.0496,7.497 4.9996,7.998 4.9996,8.5 C4.9996,9.002 5.0496,9.503 5.1206,10 L2.1816,10 C2.0676,9.518 1.9996,9.017 1.9996,8.5 L1.9996,8.5 Z M6.1276,10 C6.0506,9.505 5.9996,9.003 5.9996,8.5 C5.9996,7.997 6.0506,7.495 6.1276,7 L10.8726,7 C10.9496,7.495 10.9996,7.997 10.9996,8.5 C10.9996,9.003 10.9496,9.505 10.8726,10 L6.1276,10 Z M6.3316,11 L10.6676,11 C10.2566,12.588 9.4866,14.002 8.4996,14.86 C7.5136,14.002 6.7436,12.588 6.3316,11 L6.3316,11 Z M14.9996,8.5 C14.9996,9.017 14.9326,9.518 14.8186,10 L11.8796,10 C11.9496,9.503 11.9996,9.002 11.9996,8.5 C11.9996,7.998 11.9496,7.497 11.8796,7 L14.8186,7 C14.9326,7.482 14.9996,7.983 14.9996,8.5 L14.9996,8.5 Z M14.4986,6 L11.6916,6 C11.3396,4.521 10.6986,3.166 9.8646,2.147 C11.9626,2.597 13.6876,4.061 14.4986,6 L14.4986,6 Z M8.4996,1 C4.3646,1 0.9996,4.364 0.9996,8.5 C0.9996,12.636 4.3646,16 8.4996,16 C12.6356,16 15.9996,12.636 15.9996,8.5 C15.9996,4.364 12.6356,1 8.4996,1 L8.4996,1 Z"></path>
            </svg>
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
            <!-- <li class="sidebar__menu-items">
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
            </li> -->
            <!-- <li class="sidebar__menu-items">
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
            </li> -->
            <!-- <li class="sidebar__menu-items">
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
            </li> -->
            <!-- <li class="sidebar__menu-items">
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
            </li> -->
            <!-- <li class="sidebar__menu-items">
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
            </li> -->
            <!-- <li class="sidebar__menu-items">
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
            </li> -->
            <!-- <li class="sidebar__menu-items">
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
            </li> -->
            <!-- <li class="sidebar__menu-items">
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
            </li> -->
            <!-- <li class="sidebar__menu-items">
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
            </li> -->
            <!-- <li class="sidebar__menu-items">
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
            </li> -->
            <!-- <li class="sidebar__menu-items">
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
            </li> -->
            <!-- <li class="sidebar__menu-items">
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
            </li> -->
            <!-- <li class="sidebar__menu-items">
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
            </li> -->
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
  <script src="../src/active.js"></script>
</body>
</html>