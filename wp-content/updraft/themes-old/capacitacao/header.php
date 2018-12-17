<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head();?>
</head>
<body>
    <header>      
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo left">
                        <?php
                            if(function_exists('the_custom_logo')) {
                                the_custom_logo(); 
                            }
                        ?>
                    </a>
                    <a id="menu-mobile" href="#" data-target="mobile-demo" class="itens-mobile sidenav-trigger right"><i class="material-icons">menu</i></a>
                    <a id="icon-search" class="itens-mobile right"><i class="material-icons">search</i></a>
                    <ul class="right hide-on-med-and-down">
                        <?php 
                            $args = array(
                                "theme_location" => "main-menu",
                                "container" => "li",
                                "container_id" => "main-menu"
                            );
                            wp_nav_menu( $args );
                        ?>
                    </ul>
                </div>
                <form id="form-search" class="hide">
                    <div class="input-field">
                    <input id="search" type="search" placeholder="Search" required>
                    <i id="icon-close" class="material-icons">close</i>
                    </div>
                </form>
            </nav>
        </div>
        <div class="slider">
            <?php
                $args = array( 'post_type' => 'slider', 'posts_per_page' => 10 );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
            ?>
            <div class="slide">
                <?php echo the_post_thumbnail(); ?>
                <div class="slide-text">
                    <h1><?php echo the_title(); ?></h1>
                    <?php echo the_content(); ?>
                </div>
            </div>
            <?php
                endwhile;  
                wp_reset_postdata();
            ?>
        </div>
    </header>
