<?php
$header = file_get_contents('./header.php', true);
echo $header;
?>

<!-- ABOUT PAGE -->
<section class="section-banner">
	<div class="bg-cover" style="background-image: url('./img/img4.jpg')" data-scroll="background"></div>

	<div class="carousel-caption">
		<h2 class="image-caption">ABOUT US</h2>
		<p class="image-content-caption">Prime Fitness is fitness club established in the year 1982. The fitness club has
			equipped with all basic fitness equipment and also included the newly introduced.
			The Prime fitness club is the flagship brand for Prime Fitness Club Ltd, a UN based
			health and fitness services provider and a pioneer in the “Integrated Health Club
			Management Solutions’ business. Prime Fitness Club ltd focuses on staying fit is most
			important to meet the challenging requirements.</p>
	</div>
	<p></p>
</section>

<section class="section-about container-fluid text-center">
	<div class="container">
		<div class="row mb-4">
			<div class="col-md-12">
				<div class="heading-section">
					<h2>Contact Us</h2>
				</div>
				<div class="info-contact">
					<p><i class="fa fa-map-marker" aria-hidden="true"></i>R4, Tầng 2 72A, Thanh Xuân, Hà Nội</p>
					<p><a href="mailto:support@primefitness.com"><i class="fa fa-envelope" aria-hidden="true"></i>support@primefitness.com</a></p>
					<p><a href="tel:+84123456789"><i class="fa fa-phone" aria-hidden="true"></i>+84123456789</a></p>
				</div>
			</div>
		</div>
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3031.2064842312084!2d105.81372011424484!3d21.002795294041604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac9b105b6d4b%3A0xae854b84daba4b6e!2zUGjDsm5nIHThuq1wIHRo4buDIGThu6VjIENhbGlmb3JuaWEgQ2VudHVyeW9u!5e1!3m2!1svi!2s!4v1608287990394!5m2!1svi!2s" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
	</div>
</section>

<?php
$footer = file_get_contents('./footer.php', true);
echo $footer;
?>