<?php

$thumb_verao = get_template_directory_uri() . "/assets/verao.png";
$thumb_sol = get_template_directory_uri() . "/assets/sol.png";

$subscribe = get_template_directory_uri() . "/assets/subscribe.png";

?>
<div class="blockContainer videoContainer">
	<h2>ESTAMOS NO YOUTUBE</h2>
	<div id="videoContainer">
		<div class="videoCard"><a href="https://www.youtube.com/watch?v=_Ebkb6_Rq3M&t" target="_blank"><img src="<?php echo $thumb_verao ?>" /></a></div>
		<div class="videoCard"><a href="https://www.youtube.com/watch?v=O7p2zybDmPw&t" target="_blank"><img src="<?php echo $thumb_sol ?>" /></a></div>
		<div class="videoCard"><a href="https://www.youtube.com/watch?v=_Ebkb6_Rq3M&t" target="_blank"><img src="<?php echo $thumb_verao ?>" /></a></div>
	</div>
	<br>
	<h2>@canalborafitness</h2>
	<img src="<?= $subscribe; ?>">
</div>