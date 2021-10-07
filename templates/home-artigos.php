<div class="home-artigos section-home">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-title row d-flex align-items-end">
                    <div class="col-md-10">
                        <div class="pre-title">FIQUE POR DENTRO DOS</div>
                        <h3 class="title-artigos">Artigos, Publicações e Análises</h3>
                        <hr class="line">
                    </div>
                    <div class="col-md-2">
                        <a href="">
                            <div class="ver-todos">
                                <img src="<?php echo get_bloginfo('template_url'); ?>/img/icons/feather-arrow-right.svg" class="icon-todos" alt="" />
                                <span class="vertodos">
                                    VER TODOS
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="lista-artigos">
                    <div class="splide" id="artigos">
                        <div class="splide__track">
                            <div class="splide__list">
                                <?php 
                                $argsArtigos = array(
                                    'post_type' => 'artigos',
                                    'posts_per_page' => 6
                                );
                                $queryArtigos = new WP_QUery($argsArtigos);
                                if ($queryArtigos->have_posts()) {
                                    while ($queryArtigos->have_posts()) {
                                        $queryArtigos->the_post();
                                        ?>
                                        <div class="splide__slide">
                                            <div class="single-artigo">
                                                <div class="artigo-data"><?php echo get_the_date(); ?></div>
                                                <div class="artigo-categoria"><img src="<?php echo get_bloginfo('template_url'); ?>/img/icons/folder.svg" /> <?php 
											$postType = get_post_type();
											$terms = get_the_terms( $post, $postType );
											$listArray = array();
											foreach ($terms as $term) {
												$singleTerm = get_term_link($term->term_id, $postType);
												$listArray[] = $term->name;
											}
											echo implode(' / ', $listArray);
											?></div>
                                                <h4 class="artigo-titulo">
                                                    <?php echo get_the_title(); ?>
                                                </h4>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>