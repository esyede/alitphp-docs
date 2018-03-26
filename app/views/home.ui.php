<?php include('partials/header.ui.php');?>
<?php include('partials/navbar.ui.php');?>
<div class="jumbo-header">
	<div class="container">
		<div id="responsivity"></div>
		<div class="jumbo-desc">
			<h1>Alit Framework</h1>
            <h2>Simple, lightweight php microframework</h2>
            <ul class="small">
                <li>Simply powerful package</li>
                <li>Lightweight in size (~20Kb zipped)</li>
                <li>Easy to learn, use and extends</li>
                <li>No strict directory stucture, libre!</li>
            </ul>
            <div id="clearfix"></div>
		</div>
	</div>
</div>
<div id="foundation" class="container home">
	<div class="row">
        <div class="col-md-6">
            <h2 class="header-light regular-pad">What is alitphp?</h2>
            <blockquote>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae aliquam nemo blanditiis voluptas ea deserunt iure odit sint, consectetur quisquam illum. Beatae, aut! Debitis reprehenderit ipsum deserunt quam facilis beatae.
                </p>
            </blockquote>
        </div>
        <div class="col-md-6">
            <h2 class="header-light regular-pad">How it looks?</h2>
            <pre><code class="language-php">$app=require('fw/alit.php');
$app->route('GET /','User@profile')
    ->before('GET /','User@auth')
    ->after('GET /','User@render')
    ->run();</code></pre>
        </div>
    </div>
    <hr>
    <div class="separate"></div>
    <div class="row">
        <div class="col-sm-4">
            <h1 class="text-center"><i class="fa fa-rocket fa-2x" aria-hidden="true"></i></h1>
            <h3 class="text-center">Fast Kickstart</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum temporibus illum ipsum omnis suscipit magnam ipsa repellendus odit blanditiis! Sunt, enim sapiente saepe tenetur neque laudantium modi magnam nihil necessitatibus.
            </p>
    </div>
    <div class="col-sm-4">
        <h1 class="text-center"><i class="fa fa-shield  fa-2x" aria-hidden="true"></i></h1>
        <h3 class="text-center">Solid Result</h3>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis reprehenderit eaque, unde mollitia pariatur culpa laudantium, alias, quia aspernatur cum ratione eligendi? Temporibus libero itaque dolorem quae voluptatem magnam vel?
        </p>
    </div>
    <div class="col-sm-4">
        <h1 class="text-center"><i class="fa fa-users  fa-2x" aria-hidden="true"></i></h1>
        <h3 class="text-center">Community Backed</h3>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, aperiam veritatis dignissimos non a cupiditate quibusdam reiciendis laborum. Alias vel aliquid incidunt ab autem dolorum error iusto voluptate rem molestias.
        </p>
    </div>
</div>
</div>
<?php include('partials/footer.ui.php');?>