<?php

/* Template Name: blog */

get_header(); 

@include_once('parts/top-header.php');
?>

<div style="width:100%; height:100px; background-color:#78D556;"></div>


<?php
@include_once('parts/posts-card.php');
?>

</div>

<?php 
@include_once('parts/news-letter.php');

@include_once('parts/bottom-footer.php');

@include_once('parts/footer-rights.php');

get_footer(); ?>