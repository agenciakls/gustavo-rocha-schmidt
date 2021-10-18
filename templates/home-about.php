<div class="home-about">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="pre-title">
                    QUEM É
                </div>
                <h3 class="about-title">
                    Gustavo da Rocha Schmidt
                </h3>
                <hr class="line">
            </div>
            <div class="col-md-8 text-about">
                <?php echo get_field('quem'); ?>
                <a href="<?php echo get_page_link(InfoVar::show('sobre')); ?>"><button class="button secundary">Saiba Mais</button></a>
            </div>
        </div>
    </div>
</div>