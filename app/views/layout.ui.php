<?php include('partials/header.ui.php');?>
<?php include('partials/navbar.ui.php');?>
<div id="foundation" class="container">
	<div class="row">
		<div class="col-sm-3">
			<!-- Table of content -->
			<div id="toc"></div>
			<!-- // End Table of content -->
		</div>
		<div class="col-sm-9">
			<!-- Page content -->
			<?php echo $var['content']; ?>
			<!-- // End Page content -->
			<?php include('partials/pager.ui.php');?>
		</div>
	</div>
</div>
<?php include('partials/footer.ui.php');?>