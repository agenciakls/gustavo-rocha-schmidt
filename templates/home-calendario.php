<div class="home-calendario section-home">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-title">
                    <div class="pre-title text-center">
                        ACOMPANHE O
                    </div>
                    <h3 class="title-calendario text-center">
                        Calendário  
                    </h3>
                    <hr class="line text-center">
                </div>
                <div class="lista-calendario">
                    <?php 
                    $argsPalestras = array(
                        'post_type' => 'eventos',
                        'posts_per_page' => 3
                    );
                    $queryPalestras = new WP_QUery($argsPalestras);
                    if ($queryPalestras->have_posts()) {
                        while ($queryPalestras->have_posts()) {
                            $queryPalestras->the_post();
                            ?>
                                <div class="single-calendario row">
                                    <div class="col-md-2 col-date">
                                        <div class="date-day">22</div>
                                        <div class="date-month">JUN</div>
                                        <div class="date-year">2021</div>
                                        <hr />
                                        <div class="date-hour">
                                            <i class="far fa-clock"></i> 18h
                                        </div>
                                    </div>
                                    <div class="col-md-3 thumb-calendario">
                                    <?php 
                                    if (has_post_thumbnail()) {
                                        ?><img src="<?php echo get_the_post_thumbnail_url($post, 'medium_large'); ?>" class="img-fluid" alt=""><?php
                                    }
                                    ?>
                                    </div>
                                    <div class="col-md-7 content-text">
                                        <h4><?php echo get_the_title(); ?></h4>
                                        <?php the_excerpt(); ?>
                                        <div class="buttons-calendario">
                                            <a href=""><button class="button secundary button-out">Informações</button></a>
                                            <a href=""><button class="button secundary">ir para o evento</button></a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        }
                    }
                    ?>
                    <a href="<?php echo get_post_type_archive_link('eventos'); ?>"><button class="col-md-12 button secundary my-5 button-out">VER TODOS</button></a>
                </div>
            </div>
        </div>
    </div>
</div>