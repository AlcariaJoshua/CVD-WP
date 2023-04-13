
<?php

  /**
   * template name: contact page
   */
?>

<?php get_header(); ?>


<section class="contact__section">
            <div class="container">
                <div class="contact__wrap">
                    <div class="contact__text">
                            <h2><?php echo get_field('contact_title') ?></h2>
                               <p><?php echo get_field('contact_paragraph') ?></p>
                                    <div class="contact__icons">
                                        <div> 
                                            <i class="<?php echo get_field('phone_icon'); ?>"></i>
                                            <span>+9150643989</span>
                                        </div>
                                        <div>
                                            <i class="<?php echo get_field('envelop_icon'); ?>"></i>
                                                <span>alcariajoshua13@gmail.com</span>
                                        </div>
                                            <div>
                                                  <i class="<?php echo get_field('location_icon'); ?>"></i>
                                                 <span>Brgy. Sta. Monica SPC</span>
                                            </div>
                                              
                                    </div>
                                      
                    </div>
                    <div class="contact__input">
                            <!-- <input type="text" placeholder="name">
                            <input type="email" placeholder="email">
                            <input type="textarea" placeholder="message" row class="messageArea">
                            <div><a href="submit">Send Message</a></div> -->
                          <?php echo do_shortcode('[contact-form-7 id="143" title="Contact form 1"]'); ?>
                    </div>
                       
                </div>
            </div>
        </section>
        
            <hr>


<?php get_footer(); ?>