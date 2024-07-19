<!DOCTYPE html>
<html lang="<?php language_attributes();?>">

<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head();?>
</head>

<body>

  <header class="header">
    <div class="container">
     
       
      <div class="header__inner">
      <a href="/">
        <img class="logo--mobile" src="<?php echo get_template_directory_uri()?>/assets/images/home/logo-mobile.svg" alt="img">
      </a>
        <a href="/" class="logo">
          <img class="logo--desctop" src="<?php echo get_template_directory_uri()?>/assets/images/home/logo-header.svg" alt="img">
        </a>
          <div class="menu">
              
                  <?php
                      wp_nav_menu([
                        'theme_location' => 'menu-header',
                        'menu_class' => 'menu__list',
                        'container' => ''
                      ]);
                    ?>
               
            <div class="box-mobile">
              <div class="header__contact">
                <a href="tel:+74955404855" class="header__contact-phone">
                  <?php the_field('telefon_v_shapke', 'options');?>
                </a>
                <a href="mailto:<?php the_field('pochta_v_shapke', 'options');?>" class="header__contact-email">
                <?php the_field('pochta_v_shapke', 'options');?>
                </a>
              </div>

              <a href="#" class="header__inner-btn btn">Консультация</a>
              <div class="header__info">
                <div class="header__info-date">
                <?php the_field('vremya_raboty_v_shapke', 'options');?>
                </div>
                <div class="header__info-address">
                <?php the_field('adres_v_shapke', 'options');?>
                </div>
              </div>
            </div>
          </div>
               
            <div class="header__info">
              <div class="header__info-date">
              <?php the_field('vremya_raboty_v_shapke', 'options');?>
              </div>
              <div class="header__info-address">
              <?php the_field('adres_v_shapke', 'options');?>
              </div>
            </div>
            <div class="header__contact">
              <a href="tel:+74955404855" class="header__contact-phone">
              <?php the_field('telefon_v_shapke', 'options');?>
              </a>
              <a href="mailto:<?php the_field('pochta_v_shapke', 'options');?>" class="header__contact-email">
              <?php the_field('pochta_v_shapke', 'options');?>
              </a>
            </div>
            <a href="#" class="header__inner-btn btn">Консультация</a>
            <div class="nav-icon">
                <div class="nav-icon__middle"></div>
            </div>
      </div>
    </div>
  </header>
 