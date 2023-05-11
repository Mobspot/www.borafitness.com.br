<?php

$banner_desk = get_template_directory_uri() . "/assets/banner_desk.png";
$banner_mob = get_template_directory_uri() . "/assets/banner_mob.png";

?>

<div class="containerBanner">
	<div id="bg_banner" style="background-image: linear-gradient( to top, #008037, #7ed957 );">
		<img id="banner_desk" src="<?php echo $banner_desk ?>" alt="Banner energia e garra">
		<img id="banner_mob" src="<?php echo $banner_mob ?>" alt="Banner energia e garra">
		<span>"Para ser um vencedor, você precisa ter garra, <br>energia, e um estilo de vida acima da média"</span>

		<nav id="redes">
			<a href="<?= $instagram ?>" target="_blank">
				<img src="<?php echo get_template_directory_uri() . '/img/insta-white.svg'; ?>" data-svg="<?php echo get_template_directory_uri() . '/img/insta-white.svg'; ?>" alt="Rede Social">
			</a>
			<a href="<?= $facebook ?>" target="_blank">
				<img src="<?php echo get_template_directory_uri() . '/img/face-white.svg'; ?>" data-svg="<?php echo get_template_directory_uri() . '/img/face-white.svg'; ?>" alt="Rede Social">
			</a>
			<a href="<?= $youtube ?>" target="_blank">
				<img src="<?php echo get_template_directory_uri() . '/img/youtube-white.svg'; ?>" data-svg="<?php echo get_template_directory_uri() . '/img/youtube-white.svg'; ?>" alt="Rede Social">
			</a>
    </nav>
	</div>
	
</div>