    <?php
        get_header();
    ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="container-secao primeira-secao">
        <div class="descricao">
            <p><?php echo esc_attr( get_theme_mod( "primeira_secao_descricao" ) ); ?></p>
            <p class="citacao"><?php echo esc_attr( get_theme_mod( "primeira_secao_citacao" ) ); ?></p>
        </div>
        <div class="grid-s1-m2">
            <div>
                <h3><?php echo esc_attr( get_theme_mod( "features_titulo_1" ) ); ?></h3>
                <p><?php echo esc_attr( get_theme_mod( "features_descricao_1" ) ); ?></p>
            </div>
            <div>
                <h3><?php echo esc_attr( get_theme_mod( "features_titulo_2" ) ); ?></h3>
                <p><?php echo esc_attr( get_theme_mod( "features_descricao_2" ) ); ?></p>
            </div>
            <div>
                <h3><?php echo esc_attr( get_theme_mod( "features_titulo_3" ) ); ?></h3>
                <p><?php echo esc_attr( get_theme_mod( "features_descricao_3" ) ); ?></p>
            </div>
            <div>
                <h3><?php echo esc_attr( get_theme_mod( "features_titulo_4" ) ); ?></h3>
                <p><?php echo esc_attr( get_theme_mod( "features_descricao_4" ) ); ?></p>
            </div>
        </div>
    </div>
    <div class="segunda-secao grid-s1-m1-l3">
        <!-- <div class="imagem-fundo col s12 m5 l5" style="background-image: url('<?php //echo the_field( 'segunda_secao_imagem' ); ?>')"> -->
        <div>
            <img src="<?php echo the_field( 'segunda_secao_imagem' ); ?>" alt="" srcset="">
        </div>
        <div class="container-secao">
            <div>
                <h1><?php echo esc_attr( get_theme_mod( "segunda_secao_titulo" ) ); ?></h1>
                <p class="mb-60"><?php echo esc_attr( get_theme_mod( "segunda_secao_descricao" ) ); ?></p>
            </div>
            <div class="grid-s1-m2">
                <div class="texto-icone" data-aos="zoom-in" data-aos-duration="3000">
                    <div class="icone">
                        <?php echo the_field( 'segunda_secao_icone_1' ); ?>
                    </div>
                    <div class="texto">
                        <h3><?php echo esc_attr( get_theme_mod( "segunda_secao_titulo_1" ) ); ?></h3>
                        <p><?php echo esc_attr( get_theme_mod( "segunda_secao_descricao_1" ) ); ?></p>
                    </div>
                </div>
                <div class="texto-icone" data-aos="zoom-in" data-aos-duration="3000">
                    <div class="icone">
                        <?php echo the_field( 'segunda_secao_icone_2' ); ?>
                    </div>
                    <div class="texto">
                        <h3><?php echo esc_attr( get_theme_mod( "segunda_secao_titulo_2" ) ); ?></h3>
                        <p><?php echo esc_attr( get_theme_mod( "segunda_secao_descricao_2" ) ); ?></p>
                    </div>
                </div>
                <div class="texto-icone" data-aos="zoom-in" data-aos-duration="3000">
                    <div class="icone">
                        <?php echo the_field( 'segunda_secao_icone_3' ); ?>
                    </div>
                    <div class="texto">
                        <h3><?php echo esc_attr( get_theme_mod( "segunda_secao_titulo_3" ) ); ?></h3>
                        <p><?php echo esc_attr( get_theme_mod( "segunda_secao_descricao_3" ) ); ?></p>
                    </div>
                </div>
                <div class="texto-icone" data-aos="zoom-in" data-aos-duration="3000">
                    <div class="icone">
                        <?php echo the_field( 'segunda_secao_icone_4' ); ?>
                    </div>
                    <div class="texto">
                        <h3><?php echo esc_attr( get_theme_mod( "segunda_secao_titulo_4" ) ); ?></h3>
                        <p><?php echo esc_attr( get_theme_mod( "segunda_secao_descricao_4" ) ); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    <?php
        $args = array( 'post_type' => 'galeria', 'posts_per_page' => 6 );
        $loop = new WP_Query( $args );
        $nro_imagens = $loop->found_posts;
        $class_name = "";
        if($nro_imagens == 1) {
            $class_name = "grid-s1-m1";
        } else if($nro_imagens == 2) {
            $class_name = "grid-s1-m2";
        } else if($nro_imagens == 3) {
            $class_name = "galeria-grid-3";
        } else if($nro_imagens == 4) {
            $class_name = "galeria-grid-4";
        } else if($nro_imagens == 5) {
            $class_name = "galeria-grid-5";
        } else {
            $class_name = "galeria-grid-6";
        }
    ?>
    <div class="imagem-grid <?php echo $class_name; ?>">
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="galeria">
            <a class="fluidbox">
                <?php echo the_post_thumbnail(); ?>
            </a>
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
        <?php
            endwhile;
            wp_reset_postdata();
        ?>
    </div>
    <?php
      $clients = get_posts([
        'post_type' => 'client',
        'numberposts' => '8'
      ]);
    ?>
    <div class="container-secao grid-s1-m1">
      <div class="our-clients aos-init aos-animate" data-aos="fade-in" aos-duration="1000">
        <h2>OUR
          <span style="font-weight:bold;">CLIENTS</span>
        </h2>
        <div class="grid-s1-m1-l2">

          <div class="grid-s2-m2-l4">

            <?php
            if($clients):
              foreach ($clients as $client): ?>
              <img class="grid-center" src="<?php echo get_the_post_thumbnail_url($client); ?>" alt="">
              <?php
            endforeach;
          endif;
          ?>

          </div>

          <p class="p-2">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>

        </div>
      </div>
    </div>

    <div class="work-process-secao parallax-container">
      <div class="parallax">
        <img class="responsive-img" src="<?php echo get_field('imagem_de_fundo') ?>">
      </div>
      <div class=" container-secao work-process">
        <div class="grid-s1-m1-l2">
          <div class="grid-s1-m1">
            <h2>
              WORK <span style="font-weight:bold;">PROCESS</span>
            </h2>
            <p class="p-1">
              <?php the_field('descricao_da_sessao'); ?>
            </p>
          </div>
          <div class="grid-s1-m2">
            <?php
            for($i = 1; $i <= 4; $i++ ):
              if(get_field('icone_de_trabalho_'.$i)): ?>
              <div class="texto-icone">
                  <div class="icone">
                    <?php the_field('icone_de_trabalho_'.$i); ?>
                  </div>
                <div class="texto">
                  <h3><?php the_field('titulo_'.$i); ?></h3>
                  <p><?php the_field( 'descricao_'.$i ); ?></p>
                </div>
              </div>
            <?php
              endif;
            endfor;
            ?>
          </div>
        </div>
      </div>
    </div>
    <?php
        endwhile;
        else:
    ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php
        endif;
        get_footer();
    ?>
