<?php 
/*
Template Name: Home
*/
 ?>
 <!-- HERO IMAGE -->
	<div class="hero-background" style="background-image: url(<?php header_image();?>); background-size: <?php echo get_custom_header()->width; echo get_custom_header()->height; ?>;
    background-position: center;
    background-repeat: no-repeat;">>
		
	</div>
	<!-- END HERO IMAGE -->
	<div class="container">
		<section class="hero">
		<div class="row ghost-row">
			<a class="ghost" href="#">
				Lees meer <i class="fa fa-info"></i>
			</a>
		</div>
		</section>
		<!-- PROMOTION INFO-->
		<section class="promotion">
			<div class="flex-container">
				<div class="flex-item flex-item-same">
					<div class="circle">
						<img src="<?php echo bloginfo('template_url').'/img/index/icecream.png'; ?>" alt="icecream">
					</div>
					<div class="info">
						<h3>Titel overtuiginng</h3>
						<p>Laten we even een momentje nemen om het over liefde te hebben. We willen niet moeilijk doen op de achterkant van een pint Ben &amp; Jerry's, maar we denken dat het de moeite waard is om het over liefde te hebben. Kijk eens naar deze smaak: liefdevol gemaakt met Fairtrade ingrediënten, Caring Dairy melk &amp; room, vrije uitloop eieren en 'topped' met een extra laag liefde. Pak die lepel erbij en ontdek alle lagen dat Ben &amp; Jerry’s … Ben &amp; Jerry’s maakt!</p>
					</div>
				</div>
				<div class="flex-item flex-item-same">
					<div class="circle">
						<img src="<?php echo bloginfo('template_url').'/img/index/icecream.png'; ?>" alt="icecream">
					</div>
					<div class="info">
						<h3>Titel overtuiginng</h3>
						<p>Laten we even een momentje nemen om het over liefde te hebben. We willen niet moeilijk doen op de achterkant van een pint Ben &amp; Jerry's, maar we denken dat het de moeite waard is om het over liefde te hebben. Kijk eens naar deze smaak: liefdevol gemaakt met Fairtrade ingrediënten, Caring Dairy melk &amp; room, vrije uitloop eieren en 'topped' met een extra laag liefde. Pak die lepel erbij en ontdek alle lagen dat Ben &amp; Jerry’s … Ben &amp; Jerry’s maakt!</p>
					</div>
				</div>
				<div class="flex-item flex-item-same">
					<div class="circle">
						<img src="<?php echo bloginfo('template_url').'/img/index/icecream.png'; ?>" alt="icecream">
					</div>
					<div class="info">
						<h3>Titel overtuiginng</h3>
						<p>Deze tekst dient ervoor om de mensen te overtuigen van ons geweldig nieuwe product. Het is ook de bedoeling dat deze tekst aangepast kan worden denk ik dan toch, via wordpress. Ik weet wel nog niet hoe 'k dit ga realiseren maar ik zal mijn plan wel trekken. Top Kek Ay Lmao 420 Blaze it Kappa 4Head EleGiggle KappaPride</p>
					</div>
				</div>
			</div>

			

			<aside class="flex-container">
				<div class="flex-item flex-item-grow flex-item-same">
					<div class="wedstrijd flex-container">
					<div class="flex-item ">
						<h3>Win een jaar lang gratis ijs!</h3>
						
							<p>Hoeveel potten 'Vegan Delight' zal er in de eerste maand verkocht worden in Belgie?</p>
							<?php echo do_shortcode('[contact-form-7 id="40" title="Wedstrijd"]') ?>
					</div>
					<img src="<?php echo bloginfo('template_url').'/img/index/cup.png'; ?>" alt="Vegan Delight cup" class="flex-item">
					</div>
				</div>

				<div class="flex-item flex-item-same">
					<div class="twitter">
						<a class="twitter-timeline" href="https://twitter.com/benandjerrys"
  data-height="380">>Ben &amp; Jerry's</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
					</div>
				</div>
			</aside>

		</section>
		<!-- END PROMOTION INFO -->
	</div>