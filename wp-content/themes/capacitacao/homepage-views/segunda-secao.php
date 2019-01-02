    <div class="segunda-secao grid-s1-m1-l3">
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
