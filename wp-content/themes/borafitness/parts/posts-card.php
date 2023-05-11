<div id="contentCards">
	<?php

    $avatar = get_template_directory_uri() . "/assets/avatar.png"; 

		$args = array(
			'post_type' => 'post',
			'posts_per_page' => 50,
			'post_status' => 'publish',
			'orderby' => 'date',
			'order' => 'DESC'
		);

		$query = new WP_Query($args);
		if($query->have_posts()) {
				while($query->have_posts()){
						$query->the_post();
						$titulo = get_the_title();
						$link = get_the_permalink();
						$categoria = get_the_category();
						$imgDestaque = get_the_post_thumbnail_url();
				?> 
						<div id='cards'>
								<a href='<?= $link ?>'>
									<span id='category' style="background-color:<?= $headerColor; ?>; color:<?= $menuColor;?>"><?= $categoria[0]->name ?></span>
									<div id='imgcards' style="background-image:url('<?= $imgDestaque ?>')"></div>
								</a>

								<span id='author'><img src="<?= $avatar; ?>" /></span>

								<div id='texts'>
										<a href='<?= $link ?>'>
												<h3 id='titleCard'><?= $titulo ?></h3>
										</a>
								</div>
								<div id="line"></div>
								<div id='cardBottom'>
									<a href='<?= $link ?>' id='share'>Compartilhar</a>
									<a href='<?= $link ?>' id='leiaMore'>Leia Mais</a>
								</div>
						</div>

				<?php 
				}
			}   
	?>
</div>