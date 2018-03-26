<?php include('partials/header.ui.php');?>
<?php include('partials/navbar.ui.php');?>
<div id="foundation" class="container">
	<div class="row">
		<div class="col-sm-3">
			<h4>Already know all of this?</h4>
			<p class="small">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla voluptatum 
				cupiditate odit cum quae neque vitae numquam ipsum, tempora accusamus, repudiandae nostrum, 
				repellat! Vel, deleniti sapiente quas illum, rerum similique.
			</p>
		</div>
		<div class="col-sm-9">
			<h1>User Guide</h1>
			<p>
				Untuk mendapatkan permulaan yang optimal dalam penggunaan alitphp, 
				atau anda baru mulai mempelajari, silahkan mulai membaca dari urutan berikut:
			</p>
			<!-- Getting Started -->
			<h3 class="guide">
				1. <a href="<?php echo $this->baseurl('/guide/01-intro');?>">Intro</a>
			</h3>
			<p>
				Periksa kebutuhan sistem dan konsep dasar dibalik Alit Framework
			</p>
			<!-- Routing Engine -->
			<h3 class="guide">
				2. <a href="<?php echo $this->baseurl('/guide/02-routing');?>">Routing</a>
			</h3>
			<p>
				Mengenal konsep dan aturan penulisan kontroler di alitphp
			</p>
			<!-- System Variables -->
			<h3 class="guide">
				3. <a href="<?php echo $this->baseurl('/guide/03-sys-vars');?>">Sys Vars</a>
			</h3>
			<p>
				Mengenal konsep dan aturan penulisan model di alitphp
			</p>
			<!-- Config Files -->
			<h3 class="guide">
				4. <a href="<?php echo $this->baseurl('/guide/04-configs');?>">Configs</a>
			</h3>
			<p>
				Mengenal kelas - kelas inti di Alit Framework, kegunaan serta cara memanggilnya
			</p>
			<!-- Views and Templates -->
			<h3 class="guide">
				5. <a href="<?php echo $this->baseurl('/guide/05-views');?>">Views</a>
			</h3>
			<p>
				Mengenal konsep dan aturan penulisan view, serta template engine yang tersedia di alitphp
			</p>
			<!-- Loading 3rdparty Libraries -->
			<h3 class="guide">
				6. <a href="<?php echo $this->baseurl('/guide/06-composer');?>">Composer</a>
			</h3>
			<p>
				Mengenal pustaka - pustaka yang disertakan dalam alitphp , kegunaan, dan cara memanggilnya
			</p>
			<!-- Support and Licensing -->
			<h3 class="guide">
				7. <a href="<?php echo $this->baseurl('/guide/07-supports');?>">Supports</a>
			</h3>
			<p>
				Mengenal pustaka - pustaka yang disertakan dalam alitphp , kegunaan, dan cara memanggilnya
			</p>
			<!-- Goodies -->
			<h3 class="guide">
				8. Goodies
			</h3>
			<p>
				Mengenal pustaka - pustaka yang disertakan dalam alitphp , kegunaan, dan cara memanggilnya
			</p>
			<ul>
				<li><strong><a href="link-script-example-1">Script Example 1</a></strong></li>
				<li><strong><a href="link-script-example-2">Script Example 2</a></strong></li>
				<li><strong><a href="link-script-example-3">Script Example 3</a></strong></li>
			</ul>
			<hr>
		</div>
	</div>
</div>
<?php include('partials/footer.ui.php');?>