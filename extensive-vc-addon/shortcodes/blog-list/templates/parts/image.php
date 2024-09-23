<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( has_post_thumbnail() ) { ?>
	<div class="evc-bli-image evc-ib-zoom">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( $image_proportions ); ?></a>
	</div>
<?php }
