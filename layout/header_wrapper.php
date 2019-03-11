<div id="header-wrapper" class="container row m-auto">

	<a href="/" class="logo col-10 col-sm-11 col-lg-4 p-0 text-decoration-none">
		<!-- <img class="img-fluid" src="images/brand.png" alt="Mint"> -->
		<h1 class="font-weight-lighter text-primary"><i class="fab fa-canadian-maple-leaf"></i>Mint</h1>

	</a>

	<div class="col-2 col-sm-1 mt-3 d-lg-none"
		onclick="
			$('#header-wrapper nav').toggleClass('open');
			$('#header-wrapper .navbar-toggle').toggleClass('open');
			$('html').toggleClass('openMenu');
		">
		<span class="navbar-toggle">
			<span class="lines"></span>
			<span class="lines"></span>
			<span class="lines"></span>
		</span>
	</div>

	<nav class="nav col-12 col-lg-8 p-0 flex-column justify-content-center align-items-center flex-lg-row justify-content-lg-end align-items-lg-center">
		<a class="nav-link text-dark p-3 p-lg-0 ml-lg-0 mr-lg-3 <?php echo $currentSite == 'home' ? 'active' : ''; ?>" href="/">Mint</a>
	</nav>


</div>
