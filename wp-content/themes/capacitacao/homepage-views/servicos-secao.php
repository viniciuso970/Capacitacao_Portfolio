    <div class="container-secao servicos grid-s1-m3">
        <div class="our-services mb-50" data-aos="fade-in" data-aos-duration="1000">
            <h2> OUR <span style="font-weight: bold">SERVICES</span></h2>
        </div>
        <?php
            $args = array( 'post_type' => 'servicos' );
            $loop = new WP_Query( $args );
            $duration = 0;
            while ( $loop->have_posts() ) : $loop->the_post();
            $duration += 200;
        ?>
        <div class="mb-50" data-aos="fade-in" data-aos-duration="<?php echo $duration?>">
            <div class="texto-icone">
                <div class="icone">
                    <?php echo the_field( 'servicos_icone' ); ?>
                </div>
                <div class="texto">
                    <h3><?php the_title(); ?></h3>
                    <p><?php echo the_field( 'servicos_subtitulo' ); ?></p>
                </div>
            </div>
            <div>
                <?php the_content(); ?>
            </div>
        </div>
        <?php
            endwhile;
            wp_reset_postdata();
        ?>
    </div>
