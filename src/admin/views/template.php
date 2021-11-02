<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Danh sách template
        </h1>
    </div>
</div>
<table class="table table-bordered table-hover">
	<tr>
		<td width="50px;">STT</td>
		<td width="200px;">teplates</td>
		<td>số lượng </td>
	</tr>

	<?php
		$stt=0;
		foreach ($data as $value) {
			$stt++;
	?>
	<tr>
		<td style="text-align: center;"><?php echo $stt; ?></td>
		<td><?php echo $value["templates"]; ?></td>
		<td>
			<?php
				if($value["permission"] == 1){
					echo "Admin";
				}if($value["permission"] == 0){
					echo "Member";
				}
			?>
		</td>
       </tr>
	<?php } ?>
</table>

<ul class="paginate">
	<?php for($i=1; $i<=$page_show; $i++){ ?>
		<li><a href="index.php?controller/template.php<?php echo $i ?>"><?php echo $i; ?></a></li>
	<?php } ?>
</ul>