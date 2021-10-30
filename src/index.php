<!DOCTYPE html>
<html>
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
		<title>Tạo Blog cá nhân</title>
	</head>

	<body>
		<header class="p-3 bg-dark text-white">
			<div class="container">
			<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
				<a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
				<a style="margin: left 10px" href="#" class="nav-link px-4 text-light"> <h1>BLOGS </h1></a>
				<svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
				</a>

				<ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
				
				<li><a href="#" class="nav-link px-2 text-white"> Trang chủ </a></li>
				<li><a href="#" class="nav-link px-2 text-white"> Chủ đề </a></li>
				<li><a href="#" class="nav-link px-2 text-white"> Lĩnh vực </a></li>
				<li><a href="#" class="nav-link px-2 text-white"> Liên hệ </a></li>
				</ul>

				<form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
				<input type="search" class="form-control form-control-dark" placeholder="Tìm kiếm..." aria-label="Search">
				</form>

				<div class="text-end">
				<button type="button" class="btn btn-outline-light me-2"> Đăng nhập </button>
				<button type="button" class="btn btn-warning">Đăng kí </button>
				</div>
			</div>
			</div>
	</header>

	<main>
				<ul class="nav navbar-nav side-nav bg-drank text-white">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Danh mục </a>
                    </li>
                    <li>
                        <a href="index.php?controller=users/list"><i class="fa fa-fw fa-bar-chart-o"></i> Mẫu website phổ biến </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-book"></i> Chủ đề <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="index.php?controller=blog/list">Danh sách bài viết</a>
                            </li>
                            <li>
                                <a href="index.php?controller=catalog_blog/list">Chủ đề bài viết</a>
                            </li>
                        </ul>
                    </li>
                </ul>
	</main>

		
		

	<footer class="text-center text-white fixed-bottom bg-dark text-white ">
  <!-- Grid container -->
  <div class="container p-4"></div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 61HT
  </div>
  <!-- Copyright -->
</footer>




	</body>
