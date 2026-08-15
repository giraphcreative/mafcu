<?php

$title = get_sub_field( 'title' );
$style = get_sub_field( 'style' );
$content = get_sub_field( 'content' );
$attribution = get_sub_field( 'attribution-name' );

if ( !empty( $content ) && !empty( $attribution ) ) :
    ?>
<div class="testimonial <?php print $style; ?>">
    <div class="testimonial-inner">
        <img src="<?php bloginfo( 'template_url' ) ?>/img/stars.svg" class="stars" />
        <h2><?php print $title ?></h2>
        <img src="<?php bloginfo( 'template_url' ) ?>/img/quote.svg" class="quote" />
        <p><?php print $content ?></p>
        <p class="by"><?php print $attribution ?></p>
    </div>
</div>
    <?php
endif;

