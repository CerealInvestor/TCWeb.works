<nav>
	<div id="menuToggle">
		<!--
		A fake / hidden checkbox is used as click reciever,
		so you can use the :checked selector on it.
		-->
		<input type="checkbox" />

		<!--
		Some spans to act as a hamburger.

		They are acting like a real hamburger,
		not that McDonalds stuff.
		-->
		<span></span>
		<span></span>
		<span></span>

		<!--
		Too bad the menu has to be inside of the button
		but hey, it's pure CSS magic.
		-->
		<ul id="menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="index.php#about">About</a></li>
			<li><a href="mywork.php">My Work</a></li>
			<li><a href="product.php?product=whatwedo">Qhat we do</a>
				<ul class="" style="list-style-type: none; margin-left: -10px; margin-bottom: 0px; margin-top: 20px; padding-bottom: 0px;">
					<li><a href="product.php?product=bespoke">bespoke websites</a></li>
					<li><a href="product.php?product=ecommerce">ecommerce</a></li>
					<li><a href="product.php?product=hosting">domains & hosting</a></li>
					<li><a href="product.php?product=contentmanagement">content management</a></li>
					<li><a href="product.php?product=seo">seo</a></li>
					<li><a href="product.php?product=smallbusiness">small business</a></li>
					<li><a href="product.php?product=techsupport">tech support</a></li>
				</ul>
			</li>
			<li><a href="index.php#quote">Contact</a></li>
		</ul>
	</div>
</nav>