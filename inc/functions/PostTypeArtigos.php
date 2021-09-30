<?php 
function postTypeArtigos () {
    $labels = array(
        'name'               => _x( 'Artigos', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'Artigos', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'Artigos', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'Artigos', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Adicionar Novo', 'Artigos', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Adicionar Novo Artigos', 'your-plugin-textdomain' ),
        'new_item'           => __( 'Novo Artigos', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Editar Artigos', 'your-plugin-textdomain' ),
        'view_item'          => __( 'Visualizar Artigos', 'your-plugin-textdomain' ),
        'all_items'          => __( 'Todos', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Pesquisar Artigos', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Artigos Pai:', 'your-plugin-textdomain' ),
        'not_found'          => __( 'Nenhum Artigos encontrado.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'Nenhum Artigos encontrado in Trash.', 'your-plugin-textdomain' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Descrição', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'artigos' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail'),
    );
    register_post_type('artigos', $args);
    add_post_type_support( 'artigos', 'wps_subtitle' );
}
add_action('init', 'postTypeArtigos');
