<?php 
function postTypeEventos () {
    $labels = array(
        'name'               => _x( 'Eventos', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'Eventos', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'Eventos', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'Eventos', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Adicionar Novo', 'Eventos', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Adicionar Novo Eventos', 'your-plugin-textdomain' ),
        'new_item'           => __( 'Novo Eventos', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Editar Eventos', 'your-plugin-textdomain' ),
        'view_item'          => __( 'Visualizar Eventos', 'your-plugin-textdomain' ),
        'all_items'          => __( 'Todos', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Pesquisar Eventos', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Eventos Pai:', 'your-plugin-textdomain' ),
        'not_found'          => __( 'Nenhum Eventos encontrado.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'Nenhum Eventos encontrado in Trash.', 'your-plugin-textdomain' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Descrição', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'eventos' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail'),
    );
    register_post_type('eventos', $args);
    add_post_type_support( 'eventos', 'wps_subtitle' );
}
add_action('init', 'postTypeEventos');
