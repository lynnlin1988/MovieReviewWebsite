	<div id="Carousel" class="carousel slide">
		<ol class="carousel-indicators">
			<li data-target="#Carousel" data-slide-to="0" calss="active"></li>
			<li data-target="#Carousel" data-slide-to="1"></li>
			<li data-target="#Carousel" data-slide-to="2"></li>

		</ol>

		<div class="carousel-inner">
			<div class="item active">
				<?php
					echo "<a href=\"moviePage.php?a_tmp=11\" id=\"example\" class=\"img-responsive\"><img src=\"Homepage/img/Avengers.jpg\" alt=\"\" class=\"img-responsive\" id=\"sample11\"></a>";
				?>
			</div>

			<div class="item">
				<?php
					echo "<a href=\"moviePage.php?a_tmp=12\" id=\"example\" class=\"img-responsive\"><img src=\"Homepage/img/CaptainAmerica.jpg\" alt=\"\" class=\"img-responsive\" id=\"sample12\"></a>";
				?>
			</div>

			<div class="item">
				<?php
					echo "<a href=\"moviePage.php?a_tmp=13\" id=\"example\" class=\"img-responsive\"><img src=\"Homepage/img/Thor.jpg\" alt=\"\" class=\"img-responsive\" id=\"sample13\"></a>";
				?>
			</div>

		</div>

		<a class="carousel-control left" href="#Carousel" data-slide="prev">
			<span class="icon-prev"></span>
		</a>
		<a class="carousel-control right" href="#Carousel" data-slide="next">
			<span class="icon-next"></span>
		</a>
	</div>