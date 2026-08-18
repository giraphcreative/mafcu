<?php 

$color = get_sub_field( 'color' );
$label_position = get_sub_field( 'label-position' );

if ( have_rows( 'number') ) : ?>
    <div class="by-the-numbers <?php print $color ?>">
    <?php while ( have_rows( 'number' ) ) : the_row(); ?>
        <div class="number">
            <?php
            $label_parts = explode( '||', get_sub_field( 'label' ) );
            if ( count( $label_parts ) > 1 ) {
                $label = '<div class="label"><span>' . $label_parts[0] . '</span>' . $label_parts[1] . '</div>';
            } else {
                $label = '<div class="label">' . $label_parts[0] . '</div>';
            }
            $number = get_sub_field( 'number' );
            $unit = get_sub_field( 'unit' );
            if ( $label_position == 'top' ) print $label;
            ?>
            <div class="num"><?php 
            if ( $unit == 'dollar' ) print '<span class="dollar">$</span>';
            print $number;
            if ( $unit == 'percent-apr' ) print '<span class="percent-apr"></span>';
            if ( $unit == 'percent-apy' ) print '<span class="percent-apy"></span>';
            ?></div>
            <?php if ( $label_position == 'bottom' ) print $label; ?>
        </div>
    <?php endwhile; ?>
    </div>
<?php endif;

