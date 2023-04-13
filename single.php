<?php  get_header(); ?>

    
    <section class="singlePage">
        <div class="container">
            <div class="singlePage__wrapper">
                       
                        <div class="image">
                            <?php echo get_the_post_thumbnail() ?>
                        </div>
                        <div class="text">
                            <p><?php echo get_field('read_more') ?></p>
                        </div>
                       
            </div>
        </div>
    </section>


<?php get_footer(); ?>