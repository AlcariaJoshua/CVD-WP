
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
                                            <i class="fa-solid fa-phone-flip"></i>
                                            <span>+9150643989</span>
                                        </div>
                                        <div>
                                            <i class="fa-solid fa-envelope"></i>
                                                <span>alcariajoshua13@gmail.com</span>
                                        </div>
                                            <div>
                                                  <i class="fa-solid fa-map-pin"></i>
                                                 <span>Brgy. Sta. Monica SPC</span>
                                            </div>
                                              
                                    </div>
                                        <div class="iconsss">
                                            <a href=""><i class="fa-brands fa-facebook"></i></a></i>
                                            <a href=""><i class="fa-brands fa-twitter"></i></a></i>
                                            <a href=""><i class="fa-brands fa-instagram"></i></a></i>
                                            <a href=""><i class="fa-brands fa-youtube"></i></a></i>
                                        </div>
                    </div>
                    <div class="contact__input">
                            <input type="text" placeholder="name">
                            <input type="text" placeholder="email">
                            <input type="text" placeholder="message" row class="messageArea">
                            <div><a href="">Send Message</a></div>
                    </div>
                </div>
            </div>
        </section>
        
            <hr>


<?php get_footer(); ?>