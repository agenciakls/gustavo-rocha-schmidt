<div class="about-reconhecimento section-home">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-title">
                    <h3 class="title-areas text-center">
                        Reconhecimentos e Prêmios
                    </h3>
                    <hr class="line text-center">
                </div>


                <section id="cd-timeline" class="cd-container">
                    <?php 
                    $reconhecimentos = get_field('reconhecimentos');
                    if ($reconhecimentos) {
                        foreach ($reconhecimentos as $reconhecimentoSingle) {
                            ?>
                            <div class="cd-timeline-block">
                                <div class="cd-timeline-img cd-picture">
                                </div> <!-- cd-timeline-img -->
        
                                <div class="cd-timeline-content">
                                    <h4><?php echo $reconhecimentoSingle['data']; ?></h4>
                                    <hr>
                                    <h2><?php echo $reconhecimentoSingle['titulo']; ?></h2>
                                    <p><?php echo $reconhecimentoSingle['conteudo']; ?></p>
                                </div> <!-- cd-timeline-content -->
                            </div> <!-- cd-timeline-block -->
                            <?php
                        }
                    }
                    ?>
                </section> <!-- cd-timeline -->
            </div>
        </div>
    </div>
</div>