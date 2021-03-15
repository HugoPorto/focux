<section id="text-carousel-intro-section" class="parallax" data-stellar-background-ratio="0.5" style="background-image: url(unika/img/slider-bg.jpg);">
	<div class="container">
		<div class="caption text-center text-white" data-stellar-ratio="0.7">
			<div id="owl-intro-text" class="owl-carousel">
				<?php foreach($bannerabouts as $bannerabout):?>
					<div class="item">
						<h1><?php echo $bannerabout->title;?></h1>
						<p><?php echo $bannerabout->text;?></p>
						<div class="extra-space-l"></div>
						<!-- <a class="btn btn-blank" href="https://creativemarket.com/Themetorium" target="_blank" role="button">View More!</a> -->
					</div>
				<?php endforeach;?>
			</div>
		</div> 
	</div>
</section>