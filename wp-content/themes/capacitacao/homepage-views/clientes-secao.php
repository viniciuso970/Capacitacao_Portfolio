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

          <p class="p-2"><?php echo esc_attr( get_theme_mod( "clientes_secao_descricao" ) ); ?></p>

        </div>
      </div>
    </div>
