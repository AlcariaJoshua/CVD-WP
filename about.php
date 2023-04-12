<?php

  /**
   * template name: about page
   */
?>

<?php get_header(); ?>


        
<section class="banner__about">
            <div class="container">
                <div class="aboutBanner__wrapper">

                    <div class="about__text">
                        <p>Things you need to know</p>
                            <h1><?php echo get_field('about_title') ?></h1>
                                <p><?php echo get_field('about_text') ?></p>
                                <br>
                                <p><?php echo get_field('about_text') ?></p>
                            <div class="aboutIcon">
                                <ul>
                                    <a href=""><i class="fa-brands fa-facebook"></i></a></i>
                                    <a href=""><i class="fa-brands fa-twitter"></i></a></i>
                                    <a href=""><i class="fa-brands fa-instagram"></i></a></i>
                                    <a href=""><i class="fa-brands fa-youtube"></i></a></i>
                                </ul>
                            </div>
                    </div>
                    <div class="picAbout">
                        <img src=" <?php echo get_template_directory_uri(); ?> ./img/about/about me 1.png" alt="">
                    </div>
                    
                </div>  
            </div>
            
            <i class="<?php echo get_field('chevron') ?>"></i>
</section>  

            <section class="projects">
                <div class="container">
                    <h3>My Recent Projects</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                         Consectetur, commodi!</p>
                    <div class="projects__wrapper">
                        <?php
                          $args = array(
                            'post_type' => 'recentProjectPost',
                            'posts_per_page' => 6,
                          
                          );
                          $newQuery = new WP_Query($args)
                        ?>
                        <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>
                                 <div class="project__card">
                                        <?php echo get_the_post_thumbnail(); ?>
                                                <h4><?php the_title(); ?></h4>
                                                    <?php the_content(); ?>
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