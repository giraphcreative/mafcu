<?php

// get the photo
$photo = get_sub_field('photo');
$link = get_sub_field('link');
$padding = get_sub_field( 'padding' );
$title = get_sub_field( 'title' );
$title_color = get_sub_field( 'color' );
$caption = get_sub_field( 'caption' );


// if it's not empty, lets output it
if ( !empty( $photo ) ) {
	?>
<div class="photo">
	<div class="photo-inner">
	<?php if ( !empty( $title ) ) : ?><div class="photo-title <?php print $title_color ?>"><?php print $title ?></div><?php endif; ?>
	<?php if ( !empty( $link ) ) { ?><a href="<?php print $link; ?>"><?php } ?>
	<img src="<?php print $photo ?>" class='rounded' />
	<?php if ( !empty( $link ) ) { ?></a><?php } ?>
	</div>
	<?php if ( !empty( $caption ) ) : ?><div class="photo-caption"><?php print $caption ?></div><?php endif; ?>
</div>
	<?php
}

