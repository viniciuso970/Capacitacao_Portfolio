    <div class="work-process-secao parallax-container">
      <div class="parallax">
        <img class="responsive-img" src="<?php echo get_field('imagem_de_fundo') ?>">
      </div>
      <div class="container-secao work-process">
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
