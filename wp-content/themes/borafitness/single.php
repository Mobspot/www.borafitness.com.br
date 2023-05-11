<?php

/* Template Name: single */
get_header();
apply_filters('the_content', get_the_content(), get_the_ID());

//post principal
$titulo = get_the_title();
$categoria = get_the_category();
$dataPost = get_the_date();
$author = get_the_author();
$tags = get_the_tags();
$imgDestaque = get_the_post_thumbnail_url();

@include_once('parts/top-header.php');
?>
<div style="width:100%; height:100px; background-color:#78D556;"></div>

<container id="blogsSaude">
  <div id="contentCardsinternal" >
		<section class="contentConteudo">
			<h4 id="categorys"><?= $categoria[0]->name ?> | <?= $dataPost ?></h4>
			<h1 id="titulos"><?= $titulo ?></h1>
			<img id="imgDestaque" src="<?= $imgDestaque ?>" alt="">
			<div id="contentTextsConteudo"><?php $conteudo = the_content(); ?></div>
		</section>
	</div>
</container>
    
<?php 
@include_once('parts/bottom-footer.php');
get_footer(); ?>