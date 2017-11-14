<?php


get_header();


		if(have_posts()){
			while(have_posts()){
				the_posts();
				?>
				<h2><a herf="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p><?php the_content(); ?></p>
				<?php

			}

		}
	

get_footer();

	?>