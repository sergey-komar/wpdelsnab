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
        <img class="logo--mobile" src="<?php echo get_template_directory_uri()?>/assets/images/home/logo-mobile.svg" alt="img">
      <div class="header__inner">
        <a href="/" class="logo">
          <img class="logo--desctop" src="<?php echo get_template_directory_uri()?>/assets/images/home/logo-header.svg" alt="img">
         
        </a>
        <div class="menu__wrapper">
              
                  <?php
                      wp_nav_menu([
                        'theme_location' => 'menu-header',
                        'menu_class' => 'menu__list',
                        'container' => ''
                      ]);
                    ?>
               
          <div class="box-mobile">
            <div class="header__contact">
              <a href="tel:++74955404855" class="header__contact-phone">+7 495 540 48 55</a>
              <a href="mailto:delsnab@bk.ru" class="header__contact-email">delsnab@bk.ru</a>
            </div>

            <a href="#" class="header__inner-btn btn">Консультация</a>
            <div class="header__info">
              <div class="header__info-date">Пн-пт с 9:00 до 18:00</div>
              <div class="header__info-address">Мытищи, ул. Силикатная, д.19</div>
            </div>
          </div>
        </div>

            <div class="header__info">
              <div class="header__info-date">Пн-пт с 9:00 до 18:00</div>
              <div class="header__info-address">Мытищи, ул. Силикатная, д.19</div>
            </div>
            <div class="header__contact">
              <a href="tel:++74955404855" class="header__contact-phone">+7 495 540 48 55</a>
              <a href="mailto:delsnab@bk.ru" class="header__contact-email">delsnab@bk.ru</a>
            </div>
            <a href="#" class="header__inner-btn btn">Консультация</a>
       
      </div>
    </div>
  </header>
 