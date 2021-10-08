<div class="section-area section-home">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <div class="heading-title">
                    <div class="pre-title">
                        COMPETÊNCIAS
                    </div>
                    <h3 class="title-areas">
                        Áreas de atuação
                    </h3>
                    <hr class="line">
                </div>
                <div class="lista-accordion">
                <?php 
                    $atuacao = get_field('atuacao');
                    
                    if ($atuacao) {
                        $h = 1;
                        foreach ($atuacao as $atuacaoSingle) {
                            ?>
                            <div class="accordion my-3" id="accordion-<?php echo $h; ?>">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading<?php echo $h; ?>">
                                        <a class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion<?php echo $h; ?>" aria-expanded="true" aria-controls="accordion<?php echo $h; ?>">
                                            <div class="area-icon">
                                                <img src="<?php echo get_bloginfo('template_url'); ?>/img/icons/<?php echo $atuacaoSingle['icone']; ?>.svg" class="img-icon" alt="">
                                            </div>    
                                            <span><?php echo $atuacaoSingle['titulo']; ?></span>    
                                        </a>
                                    </h2>
                                    <div id="accordion<?php echo $h; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $h; ?>" data-bs-parent="#accordion-<?php echo $h; ?>">
                                        <div class="accordion-body">
                                            <?php echo $atuacaoSingle['conteudo']; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $h++;
                        }
                    }
                    ?>
                </div>
                


                
            </div>
            


        </div>
    </div>
</div>