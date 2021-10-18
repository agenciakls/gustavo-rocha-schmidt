<?php 
get_header(); 

get_template_part('templates/home', 'about');
get_template_part('templates/home', 'palestras');
get_template_part('templates/home', 'livros');
get_template_part('templates/home', 'artigos');
get_template_part('templates/home', 'calendario');
// get_template_part('templates/home', 'twitter');
get_template_part('templates/home', 'linkedin');
get_template_part('templates/home', 'contato');

get_footer(); 
?>