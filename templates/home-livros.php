<div class="home-livros section-home">
    <div class="container">
        <div class="row">
            <div class="col-md-12 position-relative">
                <div class="heading-title">
                    <h3 class="title-livros">
                        Livros Publicados
                    </h3>
                    <hr class="line text-center">
                </div>
                <div class="splide" id="livros">
                <?php 
                    $argsArtigos = array(
                        'post_type' => 'livros',
                        'posts_per_page' => 4
                    );
                    $queryArtigos = new WP_QUery($argsArtigos);
                    if ($queryArtigos->have_posts()) {
                        ?>
                        <div class="splide__track">
                            <div class="splide__list">
                        <?php
                        while ($queryArtigos->have_posts()) {
                            $queryArtigos->the_post();
                            ?>
                            <div class="splide__slide">
                                <div class="content-livros">
                                    <div class="row d-flex">
                                        <div class="col-md-7">
                                            <h4><?php echo get_the_title(); ?></h4>
                                            <p class="my-3"><?php echo get_the_excerpt(); ?></p>
                                            <div class="d-flex my-3 flex-wrap">
                                                <?php if (get_field('link')) { ?><a href="<?php echo get_field('link'); ?>" target="_blank"><button class="button secundary">Comprar</button></a><?php } ?>
                                                <a href="<?php echo get_permalink(); ?>"><button class="button secundary button-out">Ler Mais</button></a>
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-5">
                                        <?php 
                                        if (has_post_thumbnail()) {
                                            ?><img src="<?php echo get_the_post_thumbnail_url($post, 'medium_large'); ?>" class="img-fluid" alt=""><?php
                                        }
                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?></div></div><?php 
                    }
                    ?>
                    
                    </div>
                    <a href="<?php echo get_post_type_archive_link('livros'); ?>">
                        <div class="ver-todos">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/img/icons/feather-arrow-right.svg" class="icon-todos" alt="" />
                            <span class="vertodos">
                                VER TODOS
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>