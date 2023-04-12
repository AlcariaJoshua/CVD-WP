<?php

  /**
   * template name: Service page
   */
?>


<?php  get_header(); ?>

        <?php
            $args = array(
            'post_type' => 'servicesPost',
            'posts_per_page' => -1,
            );
            $newQuery = new WP_Query($args)
        ?>
        <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>

        <section class="<?php echo get_field('class_name'); ?>" >
            <div class="container" > 
                <div class="services">
                    <div class="services__text">
                        <h1><?php the_title(); ?></h1>
                            <p><?php the_content(); ?></p> <br>
                                <p><?php the_content(); ?></p>
                                <h5>Price starts at</h5>
                                <h4> <?php echo get_field('price') ?></h4>

                                <span>Price may vary dependeng on <br> the design and development</span>
                    </div>
                    <div class="services__img">
                        <img class="yellow" src="./img/services/Ellipse 1.png" alt="">
                        <?php echo get_the_post_thumbnail(); ?>
                    </div>
                </div>       
                <div class="arrow__down">
                    <i class="<?php echo get_field('chevron') ?>"></i>
                </div>
            </div>
        </section>

            <?php 
                endwhile;
                else:
                echo "no available content";
                endif;
                wp_reset_postdata();
            ?>


<?php get_footer(); ?>