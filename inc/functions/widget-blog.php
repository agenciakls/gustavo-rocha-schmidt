<?php
function widgetBlog() {
    register_sidebar( array(
        'name'          => __( 'Coluna Blog', 'textdomain' ),
        'id'            => 'coluna-blog',
        'description'   => __( 'Coluna da Direita do Blog', 'textdomain' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'widgetBlog' );
?>