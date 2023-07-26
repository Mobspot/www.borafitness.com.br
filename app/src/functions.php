<?php

//removendo admin bar do theme
show_admin_bar(false);

add_theme_support( 'post-thumbnails' );

include "custom-header/functions.php";
$optionsHeader = new OptionsHeader();

?>