    <div class="our-team container-secao">
        <h2>OUR<span style="font-weight:bold">TEAM</span></h2>
        <div class="grid-s1-l3 mt-5 gridcl-gap-5">
            <?php if(get_field('imagem_membro_1')): ?>
            <div class="grid-center team_member">
                <img class="responsive-img"  src="<?php the_field('imagem_membro_1') ?>" alt="">
                <h5><?php the_field('nome_membro_1'); ?></h5>
                <p><?php the_field('cargo_membro_1') ?></p>
            </div>
            <?php endif; ?>

            <?php if(get_field('imagem_membro_2')): ?>
            <div class="grid-center team_member">
                <img class="responsive-img"  src="<?php the_field('imagem_membro_2') ?>" alt="">
                <h5><?php the_field('nome_membro_2'); ?></h5>
                <p><?php the_field('cargo_membro_2') ?></p>
            </div>
            <?php endif; ?>

            <?php if(get_field('imagem_membro_3')): ?>
            <div class="grid-center team_member">
                <img  class="responsive-img" src="<?php the_field('imagem_membro_3') ?>" alt="">
                <h5><?php the_field('nome_membro_3'); ?></h5>
                <p><?php the_field('cargo_membro_3') ?></p>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="view-all-team">
    <a href="#">VIEW ALL TEAM</a>
    </div>
