<div id="header-wrapper" class="container row m-auto">

	<a href="/" class="logo col-10 col-sm-11 col-lg-4 p-0">
		<img class="img-fluid" src="images/brand.png" alt="Fitnessland">
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
		<a class="nav-link text-dark p-3 p-lg-0 ml-lg-0 mr-lg-3 <?php echo $currentSite == 'gewinnspiel' ? 'active' : ''; ?>" href="/gewinnspiel">GEWINNSPIEL</a>
		<a class="nav-link text-dark p-3 p-lg-0 mx-lg-3 <?php echo $currentSite == 'mein-fitnessland' ? 'active' : ''; ?>" href="/mein-fitnessland">MEIN FITNESSLAND</a>
		<a class="nav-link text-dark p-3 p-lg-0 mx-lg-3 <?php echo $currentSite == 'mitgliedschaft' ? 'active' : ''; ?>" href="/mitgliedschaft">MITGLIEDSCHAFT</a>
		<a class="nav-link text-dark p-3 p-lg-0 mx-lg-3 <?php echo $currentSite == 'training' ? 'active' : ''; ?>" href="/training">TRAINING</a>
		<a class="nav-link text-dark p-3 p-lg-0 mr-lg-0 ml-lg-3 <?php echo $currentSite == 'kontakt' ? 'active' : ''; ?>" href="/kontakt">KONTAKT</a>
	</nav>


</div>
