<?php

$thumb = get_template_directory_uri() . "/assets/verao.png";
$subscribe = get_template_directory_uri() . "/assets/subscribe.png";

?>
<div id="newsBlock" style="background-color:<?= $headerColor; ?>; color:<?= $menuColor;?>">
	<span>Newsletter</span>
	<input type="text" placeholder="Digite seu e-mail"/>
	<a href="#">ASSINAR</a>
</div>