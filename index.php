<?php
/*
Home/catch-all template
*/

get_header(); 

?>
	<div class="content-wide post-list-container" role="main">

		<?php
		if ( is_search() ) {
			?><h1 class="post-title">Search Results for <span>'<?php print $_REQUEST["s"]; ?>'</span></h1><?php
		} else {
			?><h1 class="post-title">Our Blog</h1><?php
		}

		?>
		<hr>
		<div class="post-list articles card">
		<?php if ( have_posts() ) : 

			// Start the Loop.
			while ( have_posts() ) : the_post(); 
				$color = get_field( 'color' );
				if ( empty( $color ) ) $color = 'grey';
				$categories = get_the_category();
				$cat = $categories[0];
				$return = '<div class="entry ' . $color . '">';
				$return .= '<div class="entry-thumbnail">';
				$return .= '<a href="' . get_the_permalink() . '">';
				$return .= get_the_post_thumbnail();
				$return .= '</a>';
				$return .= '</div>';
				$return .= '<div class="entry-inner">';
				$return .= '<a href="' . get_the_permalink() . '"><h4>' . get_the_title() . '</h4></a>';
				// $return .= '<p class="post-date">' . get_the_date() . '</p>';
				$return .= wpautop( get_the_excerpt() );
				$return .= '<p><a href="' . get_the_permalink() . '" class="btn arrow ' . $color . '">Read More</a></p>';
				$return .= '</div>';
				$return .= '</div>';
				print $return;
			endwhile;

		else :

			print "<p>There are currently no posts to list here.</p>";

		endif;
		?>
		</div>
		
		<?php paginate(); ?>

	</div><!-- #primary -->

<?php get_footer(); ?>