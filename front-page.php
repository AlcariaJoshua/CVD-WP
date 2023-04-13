<?php

  /**
   * template name: home
   */
?>


<?php get_header(); ?>


            <section class="banner">
                        <div class="container">
                            <div class="banner__wrapper">
                                <div class="banner__text">
                                  <h1><?php echo get_field('banner_title'); ?></h1>
                                        <p><?php echo get_field('banner_paragraph')?></p>
                                                <a id="banner__btn" class="btn bg--yellow" href="" ><?php echo get_field('banner_link') ?></a>
                                </div>
                                <?php $image = get_field('banner_image');
                                      if(!empty($image)):
                                ?>
                                <img src="<?php echo esc_url($image['url']) ?>"  alt="">
                                <?php endif; ?>
                            </div>
                        </div>
            </section>

            <section class="hm-services">
                <div class="container">
                    <div class="services__wrapper">
                        <?php
                          $args = array(
                            'post_type' => 'servicesPost',
                            'posts_per_page' => -1,
                          
                          );
                          $newQuery = new WP_Query($args)
                        ?>
                        <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>
                        <div class="services__item">
                          <i  class="<?php echo get_field('text_icon');?>" ></i>
                          <h4><?php the_title(); ?></h4>
                          <p><?php the_content();?></p>
                          <a class="btn bg--yellow" href="<?php echo site_url('services') ?>"><?php echo get_field('text_link'); ?></a>
                        </div>
                        <?php 
                        endwhile;
                          else:
                          echo "no available content";
                        endif;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </section>

            <section class="aboutMe">
                    <div class="container">
                        <div class="aboutme__wrapper">

                            <div class="imgContainer">
                                <img class="ec" src="<?php echo get_template_directory_uri(); ?>  ./img/home/Ellipse 1.png" alt="">
                                <img src="<?php echo get_template_directory_uri(); ?>  ./img/home/unsplash_GIy2ly37Kw8.png" alt="">
                            </div>
                          
                            <div class="aboutme__text">
                                <h3><?php echo get_field('about_title') ?></h3>
                                    <p><?php echo get_field('about_text')  ?></p>
                                    <br>
                                    <p><?php echo get_field('about_text')  ?></p>
                            </div>
                        </div>
                    </div>
            </section>
        
        <section class="trends">
            <div class="container">
                <div class="trends__title">
                    <h2>Latest Trends</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, atque</p>
                </div>
                <div class="trends__wrapper">
                        <?php
                          $args = array(
                            'post_type' => 'trendsPost',
                            'posts_per_page' => -1,
                          );
                          $newQuery = new WP_Query($args)
                        ?>
                        <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>
                              <div class="trends__card">
                              <?php echo get_the_post_thumbnail(); ?>
                                <h3><?php the_title(); ?></h3>
                                <p><?php the_content();?></p>
                                <a href="<?php  echo get_the_permalink() ?>"><?php echo get_field('trend_link'); ?></a>
                              </div>
                        <?php 
                        endwhile;
                          else:
                          echo "no available content";
                        endif;
                        wp_reset_postdata();
                        ?>
                </div>
            </div>
        </section>

        <?php include 'contactSection.php'; ?>



<?php get_footer(); ?>