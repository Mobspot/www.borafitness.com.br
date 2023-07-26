<div id="footerContainer">
	<div class='footerContent' id="box1">
		<p id="top5title">Top 5 Posts</p>
		<?php 
			$args = array(
				'post_type' => 'post',
				'post_status' => 'publish',
				// 'meta_key' => 'post_views_count',
				// 'orderby' => 'meta_value_num',
				'order' => 'DESC',
				'posts_per_page' => 5
			);
			$query = new WP_Query( $args );

			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					echo "<a href='". get_permalink($post) ."'><span class='post_title'>".$query->post->post_title . "</span></a><br>";
				

				}
			}
			wp_reset_postdata();
		?>
	</div>
	<div class='footerContent'></div>
	<div class='footerContent'></div>
</div>