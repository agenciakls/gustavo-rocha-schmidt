<?php 
function postTypeAulas () {
    $labels = array(
        'name'               => _x( 'Aulas e Palestras', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'Aulas e Palestras', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'Aulas e Palestras', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'Aulas e Palestras', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Adicionar Novo', 'Aulas e Palestras', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Adicionar Novo Aulas e Palestras', 'your-plugin-textdomain' ),
        'new_item'           => __( 'Novo Aulas e Palestras', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Editar Aulas e Palestras', 'your-plugin-textdomain' ),
        'view_item'          => __( 'Visualizar Aulas e Palestras', 'your-plugin-textdomain' ),
        'all_items'          => __( 'Todos', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Pesquisar Aulas e Palestras', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Aulas e Palestras Pai:', 'your-plugin-textdomain' ),
        'not_found'          => __( 'Nenhum Aulas e Palestras encontrado.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'Nenhum Aulas e Palestras encontrado in Trash.', 'your-plugin-textdomain' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Descrição', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'aulas-palestras' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail'),
    );
    register_post_type('aulas', $args);
    add_post_type_support( 'aulas', 'wps_subtitle' );
}
add_action('init', 'postTypeAulas');
