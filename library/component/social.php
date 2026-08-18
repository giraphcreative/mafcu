<?php

$socials = get_sub_field( 'social' );

?>
<div class="socials">
    <?php
    if ( !empty( $socials ) ) :
        foreach ( $socials as $soc ) : ?>
    <a href="<?php print $soc['link']; ?>"><img src="<?php print get_bloginfo('template_url') . '/img/icon-social-' . $soc['network']; ?>.svg" /></a>
        <?php endforeach;
    endif;
    ?>
</div>
