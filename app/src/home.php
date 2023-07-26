<?php
/* Template Name: Home */
get_header(); 

?>

<div id="container">

<?php

@include_once('parts/top-header.php');

@include_once('parts/banner-main.php');

@include_once('parts/who-we-are.php');

@include_once('parts/recent-posts.php');

@include('parts/publicity.php');

@include_once('parts/our-channel.php');

@include_once('parts/ebook-iniciante.php');

@include('parts/publicity.php');

@include_once('parts/news-letter.php');

@include_once('parts/bottom-footer.php');

@include_once('parts/footer-rights.php');

?>

</div>

<?php

get_footer(); 

?>