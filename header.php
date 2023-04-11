<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a2592a1c75.js" crossorigin="anonymous"></script>
    <title>Creative Visual Design - Home</title>
</head>
<body>
  <?php wp_head(); ?> 
    <header class="header">
        <div class="container">
            <div class="header__wrapper">
                <div class="branding">
                    <img src="<?php echo get_template_directory_uri(); ?> ./img/home/Ellipse 1.png" alt="">
                    <h2>Creative <span>Visual</span> Design</h2>
                </div>
                <div class="header__nav">
                    <ul>
                       <?php wp_menu_li(); ?>
                    </ul>
                </div>
                <div class="toggle__menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>
