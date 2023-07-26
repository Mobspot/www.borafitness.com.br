<?php
$headerColor = get_field('cor_do_header', 'options');
$menuColor = get_field('cor_do_menu', 'options');
$logo = get_field('logo', 'options');
$instagram = get_field('link_instagram', 'options');
$facebook = get_field('link_facebook', 'options');
$youtube = get_field('link_youtube', 'options');
?>

<header id="newHeaderBlock">
	<div class="newContainer">
		<nav id="menu">
			<ul>
				<li><a href="<?php echo get_home_url(); ?>" style="color:<?= $menuColor.'!important'; ?>">HOME</a></li>
				<li><a href="<?php echo get_home_url().'/blog'; ?>" style="color:<?= $menuColor.'!important'; ?>">BLOG</a></li>
			</ul>
		</nav>
		<a class="hidden-xl" href="<?php echo get_home_url(); ?>" style="color:<?= $menuColor.'!important'; ?>">HOME</a>
		<div id="logo">            
				<a href="https://www.borafitness.com.br"> 
						<img src="<?= $logo['url'] ?>" alt="Borafitness">
				</a>
		</div>
		<a class="hidden-xl" href="<?php echo get_home_url().'/blog'; ?>" style="color:<?= $menuColor.'!important'; ?>">BLOG</a>
		<nav id="redes">
        <ul>
					<a href="<?= $instagram ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri() . '/img/insta-white.svg'; ?>" data-svg="<?php echo get_template_directory_uri() . '/img/insta-white.svg'; ?>" alt="Rede Social">
					</a>
					<a href="<?= $facebook ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri() . '/img/face-white.svg'; ?>" data-svg="<?php echo get_template_directory_uri() . '/img/face-white.svg'; ?>" alt="Rede Social">
					</a>
					<a href="<?= $youtube ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri() . '/img/youtube-white.svg'; ?>" data-svg="<?php echo get_template_directory_uri() . '/img/youtube-white.svg'; ?>" alt="Rede Social">
					</a>
				</ul>
      </nav>
	</div>
</header>

<script>

const headerBlock = document.querySelector("#newHeaderBlock");
const imgLogo = document.querySelector("#logo img");
if (headerBlock) {

	(function scrollMenu() {
		window.addEventListener("scroll", achataMenu);
		window.addEventListener("DOMContentLoaded", achataMenu);
		function achataMenu(scrollTop = 0) {
			scrollTop = document.documentElement.scrollTop;
			if (scrollTop > 50) {
				headerBlock.classList.add("on");
				headerBlock.style.backgroundColor = "<?= $headerColor ?>";
				imgLogo.classList.add("on");
			} else {
				headerBlock.classList.remove("on");
				headerBlock.style.backgroundColor = "transparent";
				imgLogo.classList.remove("on");
			}
		}
	})();
}
</script>