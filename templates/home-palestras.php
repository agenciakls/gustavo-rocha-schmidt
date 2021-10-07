<div class="home-palestras section-home">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-title row d-flex align-items-end">
                    <div class="col-md-6">
                        <div class="pre-title">
                            ASSITA AS
                        </div>
                        <h3 class="title-palestras">
                            Aulas e Palestras
                        </h3>
                        <hr class="line">
                    </div>
                    
                    <div class="col-md-6">
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
                <div class="palestras">
                    <div class="splide" id="palestras">
                        <div class="splide__track">
                            <div class="splide__list">
                                        
                                <?php 
                                $argsPalestras = array(
                                    'post_type' => 'aulas',
                                    'posts_per_page' => 6
                                );
                                $queryPalestras = new WP_QUery($argsPalestras);
                                if ($queryPalestras->have_posts()) {
                                    while ($queryPalestras->have_posts()) {
                                        $queryPalestras->the_post();
                                        ?>
                                        <div class="splide__slide">
                                            <div class="single-palestra">
                                                <?php 
                                                if (has_post_thumbnail()) {
                                                    ?><img src="<?php echo get_the_post_thumbnail_url($post, 'medium_large'); ?>" alt=""><?php
                                                }
                                                ?>
                                                <h4><?php echo get_the_title(); ?></h4>
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