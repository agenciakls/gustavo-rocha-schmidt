<div class="part-aside">
    <div class="part-search">
        <div class="content-search">
            <h3>Pesquisar em Aulas e Palestras</h3>
            <div class="form-search">
                <form action="<?php echo get_bloginfo('home'); ?>" method="GET">
                    <input type="search" name="s" value="" placeholder="Digite sua pesquisa" class="form-control" />
                    <button type="submit" class="button-search"><img src="<?php echo get_bloginfo('template_url'); ?>/img/icons/icon-feather-search.svg" alt=""></button>
                </form>
            </div>
        </div>
    </div>
    <?php 
    if (get_post_type() && !is_search()) {
        
        $postType = get_post_type();
        $terms = get_terms( array(
            'taxonomy' => $postType . 'cat',
            'hide_empty' => false,
        ) );
        $count = (is_array($terms)) ? count($terms) : 0; 
        if (has_term($postType, $postType . 'cat') && $count > 0) {
            ?>
            <div class="part-categorias">
                <h3>Filtrar por categorias</h3>
                <div class="content-categorias">
                    <?php
                    foreach ($terms as $term) {
                        $singleTerm = get_term_link($term->term_id, $postType . 'cat');
                        ?><a href="<?php echo $singleTerm; ?>"><div class="single-categorias"><i class="fas fa-chevron-right"></i> <?php echo $term->name; ?></div></a><?php
                    }
                    ?>
                </div>
            </div>
            <?php
        }   


        $postType = get_post_type();
        $terms = get_terms( array(
            'taxonomy' => $postType . 'tag',
            'hide_empty' => false,
        ) );
        $count = (is_array($terms)) ? count($terms) : 0; 
        if (has_term($postType, $postType . 'tag') && $count > 0) {
            ?>
            <div class="part-tags">
                <h3>Tags</h3>
                <div class="content-tags">
                    <?php
                    foreach ($terms as $term) {
                        $singleTerm = get_term_link($term->term_id, $postType);
                        ?><a href="<?php echo $singleTerm; ?>"><div class="single-tags"><?php echo $term->name; ?></div></a><?php
                    } 
                    ?>
                </div>
            </div>
            <?php
        }
                
               
    }
    ?>
    <div class="part-shorcode part-twitter">
        <h3>Twiiter</h3>
        <?php echo do_shortcode('[custom-twitter-feeds]'); ?>
    </div>
    <!-- <div class="part-twitter">
        <a class="twitter-timeline" href="https://twitter.com/GustavoRSchmidt?ref_src=twsrc%5Etfw">Tweets by TwitterDev</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div> -->
</div>