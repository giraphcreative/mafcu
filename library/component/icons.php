<?php

$background = get_sub_field( 'background' );
$orientation = get_sub_field( 'orientation' );

// check if the nested repeater field has rows of data
if( have_rows('icons') ):

    print '<div class="icons-container ' . $background . ' ' . $orientation . '"><div class="icons">';

    // loop through the rows of data
    while ( have_rows('icons') ) : the_row();

        $icon = get_sub_field('icon');
        $title = get_sub_field('title');
        $content = get_sub_field('content');
        $button_text = get_sub_field( 'button-text' );
        if ( empty( $button_text ) ) $button_text = 'Learn More';
        $link = get_sub_field('link');
        $color = get_sub_field( 'color' );
        echo '<div class="icon">
            <div class="icon-container ' . $color . '"><img src="' . $icon . '" /></div>
            <div class="icon-content">
                <h4>' . $title . '</h4>
                <p>' . $content . '</p>' .
                ( !empty( $link ) ? '<a href="' . $link . '" class="btn' . ( $orientation != 'vertical' ? ' arrow' : '' ) . ' ' . $color . '">' . $button_text . '</a>' : '' ) .
            '</div>
        </div>';

    endwhile;

    print '</div></div>';

endif;

