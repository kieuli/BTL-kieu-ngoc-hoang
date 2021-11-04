<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
<div class="row" style="margin-left: 270px;" >
	
    <div class="col-lg-12">
        <h1 class="page-header">
            Danh sách bài viết
        </h1>
    </div>
</div>

<a href="index.php?controller=blog/add" class="btn btn-primary" style="margin-bottom: 10px; ; margin-left:300px;">Thêm bài viết</a>

<table class="table table-bordered " style="margin-left: 300px; ; width: 70%" >
	<tr>
		<td width="50px;">STT</td>
		<td width="150px">Image</td>
		<td>Tên bài viết</td>
		<td width="150px;">chủ đề</td>
		<td width="120px">Date created</td>
		<td width="80px;">More</td>
	</tr>
	<?php 
		$stt=0;
		foreach ($data as $value) {
			$stt++;
	?>
	<tr>
		<td style="text-align: center;"><?php echo $stt; ?></td>
		<td>
			<img src="../../<?php echo $value["images"] ?>" alt="Error" width="100%">
		</td>
		<td><?php echo $value["name"] ?></td>
		<td>
			<?php
				$catalog = $this->Model->fetchOne("select * from menu_catalog where id=".$value["catalog"]);
				if(isset($catalog["name"]))
					echo $catalog["name"];
			?>				
		</td>
		<td><?php echo $value["dateTime"] ?></td>
		<td>
			<a href="index.php?controller=blog/detail&id=<?php echo $value["token"] ?>">View</a>
			<a href="index.php?controller=blog/edit&id=<?php echo $value["token"] ?>">Update</a>
			<a href="index.php?controller=blog/list&act=delete&id=<?php echo $value['token'] ?>">Delete</a>
		</td>
	</tr>
	<?php } ?>
</table>

<ul class="paginate">
	<?php for($i=1; $i<=$page_show; $i++){ ?>
		<li><a href="index.php?controller=blog/list&p=<?php echo $i ?>"><?php echo $i; ?></a></li>
	<?php } ?>
</ul>
 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>