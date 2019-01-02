    <?php
        get_header();
    ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'homepage-views/primeira', 'secao');?>
        <?php get_template_part( 'homepage-views/segunda', 'secao');?>
        <?php get_template_part( 'homepage-views/servicos', 'secao');?>
        <?php get_template_part( 'homepage-views/galeria', 'secao');?>
        <?php get_template_part( 'homepage-views/clientes', 'secao');?>
        <?php get_template_part( 'homepage-views/workprocess', 'secao');?>
        <?php get_template_part( 'homepage-views/team', 'secao');?>
        
    <?php
        endwhile;
        else:
    ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php
        endif;
        get_footer();
    ?>
