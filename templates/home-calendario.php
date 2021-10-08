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
                            $dataHorario = get_field('data_horario');
                            $dia = strftime("%d", strtotime($dataHorario));
                            $mes = strftime("%b", strtotime($dataHorario));
                            $ano = strftime("%Y", strtotime($dataHorario));
                            $hora = strftime("%k", strtotime($dataHorario));
                            ?>
                                <div class="single-calendario row">
                                    <div class="col-md-2 col-date">
                                        <div class="date-day"><?php echo $dia; ?></div>
                                        <div class="date-month"><?php echo $mes; ?></div>
                                        <div class="date-year"><?php echo $ano; ?></div>
                                        <hr />
                                        <div class="date-hour">
                                            <i class="far fa-clock"></i> <?php echo $hora; ?>h
                                        </div>
                                    </div>
                                    <div class="col-md-2 thumb-calendario">
                                    <?php 
                                    if (has_post_thumbnail()) {
                                        ?><div class="img-thumb" style="background-image: url('<?php echo get_the_post_thumbnail_url($post, 'full'); ?>');"></div><?php
                                    }
                                    ?>
                                    </div>
                                    <div class="col-md-8 content-text">
                                        <h4><?php echo get_the_title(); ?></h4>
                                        <?php the_excerpt(); ?>
                                        <div class="buttons-calendario">
                                            <a href="<?php echo get_permalink(); ?>"><button class="button secundary button-out">Informações</button></a>
                                            <?php if (get_field('link')) { ?><a href="<?php echo get_field('link'); ?>" target="_blank"><button class="button secundary">ir para o evento</button></a><?php } ?>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        }
                    }
                    ?>
                    <a href="<?php echo get_post_type_archive_link('eventos'); ?>"><button class="col-md-12 button secundary my-5 py-3 button-out">VER TODOS</button></a>
                </div>
            </div>
        </div>
    </div>
</div>