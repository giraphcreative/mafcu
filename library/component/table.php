<?php

$title = get_sub_field( 'title' );
$headers = get_sub_field( 'headers' );
$widths = get_sub_field( 'widths' );
$columns = get_sub_field( 'columns' );

if ( have_rows( 'row' ) ) :
    ?>
    <div class="table">
        <table cellspacing=0 cellpadding=0>
    <?php
    if ( !empty( $title ) ) {
        ?>
            <tr>
                <th class="super" colspan="<?php print $columns ?>"><?php print $title; ?></th>
            </tr>
        <?php
    }

    foreach ( array( 'one', 'two', 'three', 'four' ) as $col ) :
        if ( !empty( $widths[$col] ) ) {
            $widths[$col] = ' width="' . $widths[$col] . '%"';
        } 
    endforeach;

    while ( have_rows( 'row' ) ) : the_row();
        if ( get_sub_field( 'header' ) ) {
            $tag = 'th class="sub"';
        } else {
            $tag = 'td';
        }
        ?>
            <tr>
                <<?php print $tag; ?> class="label"<?php print $widths['one'] ?>><?php the_sub_field( 'label' ); ?></<?php print $tag; ?>>
                <<?php print $tag; ?><?php print $widths['two'] ?>><?php the_sub_field( 'two' ); ?></<?php print $tag; ?>>
                <?php if ( $columns >= 3 ) : ?><<?php print $tag; ?><?php print $widths['three'] ?>><?php the_sub_field( 'three' ); ?></<?php print $tag; ?>><?php endif; ?>
                <?php if ( $columns == 4 ) : ?><<?php print $tag; ?><?php print $widths['four'] ?>><?php the_sub_field( 'four' ); ?></<?php print $tag; ?>><?php endif; ?>
            </tr>
        <?php
    endwhile;
    ?>
        </table>
    </div>
    <?php
endif;


