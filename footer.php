<?php wp_footer(); ?>
<?php $homepage_id = get_option('page_on_front') ?>
<section class="footer">
            <div class="container">
                <div class="iconsText">
                <ul>
                    <?php if( have_rows('the_icons', $homepage_id)): ?>
                        <?php while( have_rows('the_icons', $homepage_id)) : the_row(); ?>
                            <?php $sub_value = get_sub_field('icons'); 
                                    $link = get_sub_field('icon_link');
                            ?>

                    <a href="<?php echo $link ?>"><i class="<?php echo $sub_value ?>"></i></a></i>
                        
                    <?php endwhile; ?>
                        <?php endif; ?>    

                </ul>
                    
                        <p>Brgy. Sta. Monica SPC</p>
                </div>
                <div class="remarks">
                    <p><?php echo get_field('footer_remarks') ?></p>
                </div>
            </div>
        </section>

<script src="./script.js"></script>
</body>
</html>