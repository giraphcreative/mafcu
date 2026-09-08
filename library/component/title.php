<?php

// get the title and theme
$title = get_sub_field( 'title' );
$color = get_sub_field( 'color' );
$image = get_sub_field( 'image' );

// if it's not empty, lets output it
if ( !empty( $title ) ) {
	?>
<div class="title-container <?php print $color; ?> <?php print $style ?>" style="background-image:url(<?php print $image; ?>);">
	<div class="title">
		<h1><?php print $title ?></h1>
	</div>
</div>
	<?php
}
