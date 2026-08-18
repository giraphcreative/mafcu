<?php

$background = get_sub_field( 'background' );

// check if the nested repeater field has rows of data
if( have_rows('icons') ):

    print '<div class="icons-container ' . $background . '"><div class="icons">';

    // loop through the rows of data
    while ( have_rows('icons') ) : the_row();

        $icon = get_sub_field('icon');
        $title = get_sub_field('title');
        $content = get_sub_field('content');
        $link = get_sub_field('link');
        $color = get_sub_field( 'color' );
        echo '<div class="icon">
            <div class="icon-container ' . $color . '"><img src="' . $icon . '" /></div>
            <div class="icon-content">
                <h4>' . $title . '</h4>
                <p>' . $content . '</p>
                <a href="' . $link . '" class="btn arrow ' . $color . '">Learn More</a>
            </div>
        </div>';

    endwhile;

    print '</div></div>';

endif;

