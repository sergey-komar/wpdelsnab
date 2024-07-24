<?php
/**
 * Template Name: Контакты
 */
?>
<?php get_header();?>
<main class="main">
<?php the_content();?>
    <section class="contact">
        <div class="container">
            <div class="contact-block">
                <h1 class="contact-block__title title">Контакты</h1>
                <div class="contact-block__content">
                    <img src="<?php echo get_template_directory_uri()?>/assets/images/contact/contact-bg.jpg" alt="img" class="contact-block__content-img">
                    <div class="contact-block__info">
                        <a href="#" class="contact-block__info-text">
                            <span> Тел: </span>
                            <?php the_field('kontakty_telefon');?>
                        </a>
                        <p class="contact-block__info-text">
                            <span>Адрес: </span>
                            <?php the_field('kontakty_adres');?>
                        </p>
                        <a href="#" class="contact-block__info-text">
                            <span>Email для заявок: </span>
                            <?php the_field('kontakty_pochta');?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="feedback feedback--contact">
      <div class="container">
        <div class="feedback-block">
          <div class="feedback-block__left">
            <h3 class="feedback-block__lefr-title title">Обратная связь</h3>
            <p class="feedback-block__left-text">Пн-пт с 9:00 до 18:00</p>
          </div>

          <div class="feedback-block__right">
            <div class="feedback-block__contact">
              <a href="tel:+74955404855" class="feedback-block__item">
                <div class="feedback-block__item-img">
                  <img src="<?php echo get_template_directory_uri()?>/assets/images/home/phone-contact-white.svg" alt="img">
                
                </div>
                <p>+7 495 540 48 55</p>
              </a>
              <div class="feedback-block__item">
                <div class="feedback-block__item-img">
                  <img src="<?php echo get_template_directory_uri()?>/assets/images/home/address-contact-white.svg" alt="img">
                </div>
                
                <p>г. Москва, ул. Вешних Вод, 4с79</p>
              </div>
              <a href="maito:Delsnab@bk.ru" class="feedback-block__item">
                <div class="feedback-block__item-img">
                  <img src="<?php echo get_template_directory_uri()?>/assets/images/home/email-contact-white.svg" alt="img">
                </div>
                
                <p>Delsnab@bk.ru</p>
              </a>
            </div>
            <div class="feedback-block__right-map">
              <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A7362448c6f4998895cae4f36bc67707850e804b93ec3b6a45340a6aaba12092d&amp;source=constructor" width="900" height="460" frameborder="0"></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="customers-slider">
          <div class="container">
            <h3 class="customers-slider__title title">Наши заказчики</h3>
          </div>
          
          <div class="customers-slider__box">
            <?php if(have_rows('slajder_zakazchiki_kartochka')) : while(have_rows('slajder_zakazchiki_kartochka')): the_row()?>
            <div class="customers-slider__wrapper">
              <div class="customers-slider__item">
                <img src="<?php the_sub_field('slajder_zakazchiki_kartochka_kartinka');?>" alt="img">
              </div>
            </div> 
            <?php endwhile; endif;?>
          </div>

          <div class="customers-slider__mobile">
              <div class="customers-slider__box--mobile">
                <?php if(have_rows('slajder_zakazchiki_kartochka')) : while(have_rows('slajder_zakazchiki_kartochka')): the_row()?>
              <div class="customers-slider__wrapper">
                <div class="customers-slider__item">
                  <img src="<?php the_sub_field('slajder_zakazchiki_kartochka_kartinka');?>" alt="img">
                </div>
              </div> 
              <?php endwhile; endif;?>
              </div>
          </div>

          <div class="container">
            <div class="customers-slider__arrows"></div>
          </div>
          <div class="container">
            <div class="customers-slider__arrows--mobile"></div>
          </div>
      </section>

    <section class="contact-production">
        <div class="container">
            <div class="contact-production__box">
                <h3 class="contact-production__box-title title">Производство</h3>
                <div class="contact-production__gallery">
                    <div class="contact-production__gallery-img">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/contact/contact-img-1.jpg" alt="img">
                    </div>
                    <div class="contact-production__gallery-img">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/contact/contact-img-2.jpg" alt="img">
                    </div>
                    <div class="contact-production__gallery-img">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/contact/contact-img-3.jpg" alt="img" >
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-production contact-production--mobile">

      <div class="contact-production__box">
          <h3 class="contact-production__box-title title">Производство</h3>
          <div class="contact-production__gallery">
              <div class="contact-production__gallery-img">
                  <img src="<?php echo get_template_directory_uri()?>/assets/images/contact/contact-img-1.jpg" alt="img">
              </div>
              <div class="contact-production__gallery-img">
                  <img src="<?php echo get_template_directory_uri()?>/assets/images/contact/contact-img-2.jpg" alt="img">
              </div>
              <div class="contact-production__gallery-img">
                  <img src="<?php echo get_template_directory_uri()?>/assets/images/contact/contact-img-3.jpg" alt="img" >
              </div>
          </div>
      </div>

    </section>

    <section class="are are--contact">
        <div class="container">
            <div class="are-block">
            <h3 class="are-block__title title">Заказать обратный звонок</h3>
            <div class="are-wrapper">
                <div class="are-box--about">
                    <div class="are-wrapper__form">
                        <div class="are-wrapper__form-title">
                            Рассчитайте стоимость заказа
                        </div>
                        <div class="are-wrapper__info">
                            
                            <div class="are-wrapper__desc">
                            <?php echo do_shortcode('[contact-form-7 id="e5941b5" title="Получить кп"]')?>
                            </div>
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/home/form-bg.jpg" alt="img" class="are-wrapper__info-img">
                        </div>
                        </div>
                </div>
                
            </div>
            </div>
        </div>
    </section> 

</main>
<?php get_footer();?>