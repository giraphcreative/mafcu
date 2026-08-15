<?php

$title = get_sub_field( 'title' );
$menu = get_sub_field( 'nav-menu' );

?>
<div class="nav-menu-container">
<?php
if ( !empty( $title ) ) print "<h4>" . $title . "</h4>";
wp_nav_menu(array(
    'menu' => $menu,
    'menu_class' => 'page-menu'
));
?>
</div>
