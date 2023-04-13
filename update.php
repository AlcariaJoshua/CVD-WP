<?php

  /**
   * template name: Update Page
   */
?>


<?php get_header(); ?>

<section class="updates">
        <div class="container">
            <div class="updates__title">
                <h1>Latest Trends</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            </div>
                <div class="updates__wrapper"><!--grid-->

                    <div class="updates__left">
                        <?php
                          $args = array(
                            'post_type' => 'trendsPost',
                            'posts_per_page' => 3,
                            'offset' => -1
                          );
                          $newQuery = new WP_Query($args)
                        ?>
                        <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>
                        <div class="updates__item">
                            <?php echo get_the_post_thumbnail(); ?>
                                <div class="updates__author">
                                    <ul>
                                        <li><i class="fa-solid fa-user"></i> <span>Joshua Alcaria</span></li>
                                        <li><i class="fa-solid fa-calendar"></i> <span>February 23, 2023</span></li>
                                        <li><i class="fa-solid fa-tag"></i> <span>Web Design | Wire Frame</span></li>
                                    </ul>
                                </div>
                                <div class="updates__text">
                                        <h4><?php the_title(); ?></h4>
                                           <p><?php echo get_field('updates_description') ?></p>
                                                    <a href="<?php echo get_permalink(); ?>">Read more...</a>
                                </div>
                        </div>
                        <?php 
                        endwhile;
                          else:
                          echo "no available content";
                        endif;
                        wp_reset_postdata();
                        ?>
                        
                    </div>

                    <div class="updates__right">
                        <div class="updates__categ">
                                <h4>Categories</h4>
                            <table>
                                <tr>
                                    <td>Web Design</td>
                                    <td>(2)</td>
                                </tr>
                                <tr>
                                    <td>Web Development</td>
                                    <td>(3)</td>
                                </tr>
                                <tr>
                                    <td>Wire Frame</td>
                                    <td>(1)</td>
                                </tr>
                                <tr>
                                    <td>Vector & Logo</td>
                                    <td>(5)</td>
                                </tr>
                                <tr>
                                    <td>Social Media</td>
                                    <td>(2)</td>
                                </tr>
                            </table>
                        </div>

                        <div class="recent__post">
                                <h4>RECENT POST</h4>

                            <div class="recent__post__pic">
                                    <img src="<?php echo get_template_directory_uri(); ?>./img/updates/unsplash_Im7lZjxeLhg.png" alt="">
                                    <div class="recent__post__text"> 
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                            <span>February 23 2023</span>
                                    </div>
                                       
                            </div>
                            <div class="recent__post__pic">
                                    <img src="<?php echo get_template_directory_uri(); ?>./img/updates/unsplash_OqtafYT5kTw.png" alt="">
                                    <div class="recent__post__text"> 
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                            <span>February 23 2023</span>
                                    </div>
                                       
                            </div>
                            <div class="recent__post__pic">
                                    <img src="<?php echo get_template_directory_uri(); ?>./img/updates/unsplash_MxVkWPiJALs.png" alt="">
                                    <div class="recent__post__text"> 
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                            <span>February 23 2023</span>
                                    </div>
                                       
                            </div>
                        </div>

                            <div class="tags">
                                <h4>TAGS</h4>
                                    <!-- <div class="tags__wrapper">
                                        <div class="tags__button">
                                            <div class="bbtn"><a href="">Web Design</a></div>
                                        </div>
                                        <div class="tags__button">
                                            <div class="bbtn"><a href="">Wire Frame</a></div>
                                        </div>
                                    </div>
                                    <div class="tags__wrapper">
                                        <div class="tags__button">
                                            <div class="bbtn" >Web Development</a></div>
                                        </div>
                                        <div class="tags__button">
                                            <div class="bbtn"><a href="">Logo</a></div>
                                        </div>
                                    </div>s
                                    <div class="tags__wrapper">
                                        <div class="tags__button">
                                            <div class="bbtn"><a href="">Vector</a></div>
                                        </div>
                                        <div class="tags__button">
                                            <div class="bbtn"><a href="">Social</a></div>
                                        </div>
                                    </div> -->

                                        <div class="updates__button">
                                        <?php 
                                            $tags = get_tags();
                                                if($tags) :
                                                    foreach($tags as $tag) :
                                           ?>
                                           <a href="<?php echo esc_url( get_tag_link($tag->term_id)); ?>" 
                                           class="btn light-color" title="<?php echo esc_attr($tag->name); ?>">
                                            <?php echo esc_html($tag->name); ?></a>
                                           <?php endforeach ?>
                                           <?php endif ?>
                                        </div>

                            </div>
                    </div>

                </div>
        </div>
    </section>

    <?php include 'contactSection.php'; ?>

<?php get_footer(); ?>