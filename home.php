<!-- Slideshow container -->
<div class="slideshow-container border-bottom">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <!--<div class="numbertext">2 / 3</div>-->
    <img src="images/showcase-responsive.png" style="width:100%" alt="Responsive web development Image">
    <div class="text">Mobile and Tablet Friendly Designs... <a href="product.php?product=responsive">view more</a></div>
  </div>

  <div class="mySlides fade">
    <!--<div class="numbertext">3 / 3</div>-->
    <img src="images/showcase-seo2.png" style="width:100%" alt="SEO image">
    <div class="text">Building Business Visibility... <a href="product.php?product=seo">view more</a></div>
  </div>

  <div class="mySlides fade">
    <!--<div class="numbertext">1 / 3</div>-->
    <img src="images/showcase-ecommerce2.png" style="width:100%; ;" alt="Ecommerce image">
    <div class="text">Full Ecommerce/Bespoke Websites... <a href="product.php?product=bespoke">view more</a></div>
  </div>

  <!-- Next and previous buttons 
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>-->
</div>

<!-- The dots/circles 
<div style="text-align:center" class="border-bottom">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>-->

<section id="section-d" class="grid">
	<div class="content-wrapper" style="text-align: left;">
		<a id="about"></a>
		<h2 class="content-title brand-color">Hi! I'm Tom</h2>
		<p>A backend developer working out of Tunbridge Wells, Kent in the UK.</p>
		<p>I'm proficient in <span class="bold">PHP</span>, <span class="bold">MySQL</span>, <span class="bold">HTML5</span>, <span class="bold">CSS3</span>, <span class="bold">Javascript</span> to name a few web programming languages.</p>
		<p>From developing full blown <span class="bold"><a href="product.php?product=bespoke">Ecommerce &amp; Bespoke Websites</a></span>  to <span class="bold"><a href="product.php?product=seo">SEO</a></span> and <span class="bold"><a href="product.php?product=seo">Brand Marketing Campaigns</a></span> to <span class="bold"><a href="product.php?product=techsupport">Tech Support</a></span> we have you covered.</p>
	</div>
</section>

<!-- Section C-->
<section id="section-c">
	<!--<h2 class="content-title">What I do</h2>-->
	<ul>
		<li>
			<div class="card">
				<img src="images/coding.png" alt="">
				<div class="card-content">
					<h3 class="card-title">Web Development</h3>
					<p>Developing websites from scratch using multiple programming languages to create the fastest innovative webites possible... <a href="product.php?product=ecommerce">view more</a></p>
				</div>
			</div>
		</li>
		<li>
			<div class="card">
				<img src="images/seo.png" alt="search engine optimization">
				<div class="card-content">
					<h3 class="card-title">SEO</h3>
					<p>Don't have a web presence? Falling behind competition? We can help with your Search Engine Optimization which will help you shine online... <a href="product.php?product=seo">view more</a></p>
				</div>
			</div>
		</li>
		<li>
			<div class="card">
				<img src="https://static.pexels.com/photos/265087/pexels-photo-265087.jpeg" alt="">
				<div class="card-content">
					<h3 class="card-title">Tech Support</h3>
					<p>Problems with your computer? Issues with a website? We can look into these and fix those issues whenever they arise... <a href="product.php?product=techsupport">view more</a></p>
				</div>
			</div>
		</li>
	</ul>
</section>

<!-- Header Showcase -->
<header id="showcase" class="grid border-top">
	<div class="bg-image"></div>
  	<div class="content-wrap" style="margin-top: 1.5em;">
    	<!--<h1 style="color: #EA4C29; background-color: #FFF; padding: 0.2em;opacity: 0.7;">Innovative Web Development</h1>-->
    	<p><button style="margin: 4em 0 0 0;">Get a Quote</button></p>
    	<a href="#section-b" class="btn"></a>
  	</div>
</header>

<main id="main">

	<!-- Section A
	<section id="section-a" class="grid">
		<div class="content-wrapper">
			
		</div>
	</section>-->



	<!-- Section B-->
	<section id="section-b" class="grid border-bottom">
		<div class="content-wrapper" style="text-align: center;">
			<h2 class="content-title">Web Development</h2>
			<span class="content-images-inline">
				<img src="images/lightbulb.png" alt="lightbulb idea" />
				<img src="images/arrow.png" alt="lightbulb idea" />
				<img src="images/browser.png" alt="publish live website" />
			</span>
			<p class="quote-idea">From idea to reality</p>
		</div>
	</section>	
	<?php include('includes/contactform.php'); ?>	
</main>