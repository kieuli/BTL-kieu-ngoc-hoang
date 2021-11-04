<?php

	class ListCatalogBlog extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch ($act) {
				case 'add':
					$menucata_name = $_POST["topic"];
					$menucata_metaTitle = RemoveString($menucata_name);
					$this->Model->execute("insert into menu_catalog(name, metaTitle) values('$menucata_name','$menucata_metaTitle')");
					// header("location: index.php?controller=catalog_blog/list");
					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=catalog_blog/list'>";
					break;

				case 'delete':
					$menucata_id = isset($_GET["id"])?$_GET["id"]:0;
					$this->Model->execute("delete from menu_catalog where id=$menucata_id");
					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=catalog_blog/list'>";
					break;
			}

			$data = $this->Model->fetch("select * from menu_catalog");

			include "views/catalog_blog/listView.php";
		}
	}
	new ListCatalogBlog();

?>