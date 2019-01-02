    <?php
        $args = array( 'post_type' => 'galeria', 'posts_per_page' => 7 );
        $loop = new WP_Query( $args );
        $nro_imagens = $loop->found_posts;
        $class_name = "";
        if($nro_imagens == 1) {
            $class_name = "grid-s1-m1";
        } else if($nro_imagens == 2) {
            $class_name = "grid-s1-m2";
        } else if($nro_imagens != 7) {
            $class_name = "grid-s1-m2-l3";
        } else {
            $class_name = "galeria-grid-7";
        }
    ?>
    <div class="imagem-grid <?php echo $class_name; ?>">
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="galeria">
            <div class="imagens">
                <?php echo get_the_post_thumbnail(); ?>
                <div class="galeria-text hide">
                    <h1><?php echo the_title(); ?></h1>
                    <?php
                        $categorias = get_the_category();
                        foreach($categorias as $category) {
                            echo '<p><a href="'. esc_url( get_category_link( $category->term_id)) .'">'. get_cat_name( $category->term_id) .'</a></p>';
                        }
                    ?>
                </div>
            </div>
        </div>
        <?php
            endwhile;
            wp_reset_postdata();
        ?>
    </div>
