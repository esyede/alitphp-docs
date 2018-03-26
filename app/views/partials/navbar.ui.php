<div class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" 
				data-target=".navbar-content">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="<?php echo $this->baseurl();?>" class="navbar-brand">
				<img src="<?php echo $this->baseurl('/assets/images/logo.png');?>" 
					class="image image-responsive" alt="logo">
			</a>
		</div>
		<div class="collapse navbar-collapse navbar-right navbar-content">
			<ul class="nav navbar-nav on-click-1">
                <li><a href="<?php echo $this->baseurl();?>">Home</a></li>
                <li><a href="<?php echo $this->baseurl('/guide');?>">User Guide</a></li>
                <li><a href="<?php echo $this->baseurl('/apis');?>">API Reference</a></li>
                <li><a href="<?php echo $this->baseurl('/pages/contribute');?>">Contribute</a></li>
                <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						Download <b class="caret"></b></a>
					<ul class="dropdown-menu" role="menu">
						<li class="dropdown-header">
							<a href="<?php echo $this->baseurl('/latest.zip');?>">
								<i class="fa fa-download"></i> Latest release
							</a>
						</li>
						<li class="dropdown-header">
							<a href="<?php echo $this->baseurl('/alitphp.com.zip');?>">
								<i class="fa fa-file-archive-o"></i> Download this site
							</a>
						</li>
					</ul>
				</li>
            </ul>
		</div>
	</div>
</div>