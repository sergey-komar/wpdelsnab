<?php
/**
 * Template Name: Металлические конструкции
 */
?>
<?php get_header();?>
  <main class="main">
       <section class="nershaveika lestnici">
        <div class="container">
            <div class="nershaveika-block">
                <aside class="aside">
                    <ul>
                        <li>
                            <a class="aside--active" href="">Металлические конструкции</a>
                            <?php
                                wp_nav_menu([
                                  'theme_location' => 'menu-metall',
                                  'menu_class' => 'aside-menu',
                                  'container' => ''
                                ]);
                              ?>
                        </li>
                        <li>
                            <a  href="http://delshab/izdeliya-iz-nerzhavejki/">Изделия из нержавейки</a>
                                   
                          <?php
                            wp_nav_menu([
                              'theme_location' => 'menu-nerzhaveila',
                              'menu_class' => 'aside-menu',
                              'container' => ''
                            ]);
                          ?>
                        </li>
                        <li><a href="http://delshab/proektnye-raboty/">Проектирование</a></li>
                    </ul>
                </aside>
                

                <div class="nershaveika-box nershaveika-box--lestnici">
                  <div class="nershaveika-box__number">
                    <h3 class="nershaveika-box__number-title title">
                      Производство металлоконструкций
                    </h3>
                    <div class="filter">
                      <div class="search__wrapper-filter">
                          Фильтры
                      </div>
                      
                      <aside class="aside sidebar--mobile">
                        <ul>
                          <li>
                              <a class="aside--active" href="">Металлические конструкции</a>
                              <?php
                                  wp_nav_menu([
                                    'theme_location' => 'menu-metall',
                                    'menu_class' => 'aside-menu',
                                    'container' => ''
                                  ]);
                                ?>
                            </li>
                            <li>
                              <a  href="http://delshab/izdeliya-iz-nerzhavejki/">Изделия из нержавейки</a>
                                   
                              <?php
                                wp_nav_menu([
                                  'theme_location' => 'menu-nerzhaveila',
                                  'menu_class' => 'aside-menu',
                                  'container' => ''
                                ]);
                              ?>
                            </li>
                            <li><a href="http://delshab/proektnye-raboty/">Проектирование</a></li>
                        </ul>
                      </aside>
                    </div>
                    <img src="<?php echo get_template_directory_uri()?>/assets/images/metallicheskie/metallicheskie-bg.jpg" alt="img" class="nershaveika-box__img">
                    <h3 class="nershaveika-box__number-title title">
                      Преимущественной нашей стороной является:
                    </h3>
                    <div class="nershaveika-box__item">
                        <div class="nershaveika-box__item-number">01</div>
                        <div class="nershaveika-box__item-text">
                          Выполнение полного комплекса работ - подготовка проектно-сметной документации, изготовление, сборка, доставка и монтаж
                        </div>
                    </div>
                    <div class="nershaveika-box__item">
                        <div class="nershaveika-box__item-number">02</div>
                        <div class="nershaveika-box__item-text">
                          Все операции в рамках металлообработки выполняются на высокотехнологичном оборудовании с применением прогрессивных технологий, что обеспечивает выполнение заказа в минимально возможные сроки и по наименьшим расценкам
                        </div>
                    </div>
                    <div class="nershaveika-box__item">
                        <div class="nershaveika-box__item-number">03</div>
                        <div class="nershaveika-box__item-text">
                          Каждая операция может выполняться несколькими способами, например, резка металла производится лазерным, плазменным, газовым методом, что позволяет работать с заготовками любой толщины
                        </div>
                    </div>
                    <div class="nershaveika-box__item">
                        <div class="nershaveika-box__item-number">04</div>
                        <div class="nershaveika-box__item-text">
                          При производстве строго соблюдаются нормы ГОСТ и технических регламентов, что гарантирует прочность и безопасность эксплуатации
                        </div>
                    </div>
                    <div class="nershaveika-box__item">
                        <div class="nershaveika-box__item-number">05</div>
                        <div class="nershaveika-box__item-text">
                          Использование своего парка спецтехники, грузоподъемного оборудования и автотранспорта позволяет минимизировать расходы на доставку и монтаж и не зависеть от других компаний
                        </div>
                    </div>
                  
                  </div>
                   
                </div>
            </div>
        </div>
       </section>

       <section class="metal">
          <div class="container">
            <div class="metal-block">
              <h3 class="metal-block__title title">
                Металлические констукции
              </h3>
              <div class="metal-box">
                <?php if(have_rows('metallicheskie_konstrukczii_kartochka')) : while(have_rows('metallicheskie_konstrukczii_kartochka')): the_row()?>
                <div class="metal-box__item">
                  <img src="<?php the_sub_field('metallicheskie_konstrukczii_kartochka_kartinka');?>" alt="img" class="metal-box__item-img">
                  <div class="metal-box__item-text">
                  <?php the_sub_field('metallicheskie_konstrukczii_kartochka_zagolovok');?>
                  </div>
                  <ul class="metal-box__list">
                   <?php if(have_rows('metallicheskie_konstrukczii_spisok')) : while(have_rows('metallicheskie_konstrukczii_spisok')): the_row()?>
                    <li class="metal-box__list-item">
                    <?php the_sub_field('metallicheskie_konstrukczii_spisok_tekst');?>
                    </li>
                    <?php endwhile; endif;?>
                  </ul>
                  <a href="<?php the_sub_field('metallicheskie_konstrukczii_kartochka_ssylka');?>" class="metal-box__item-btn">Подробнее</a>
                </div>
                <?php endwhile; endif;?>
              </div>
            </div>
          </div>
       </section>

       <section class="contact-production contact-production--metallicheskie">
        <div class="container">
            <div class="contact-production__box">
                <h3 class="contact-production__box-title title">Выполненные работы</h3>
                <div class="contact-production__inner">
                  <div class="contact-production__gallery">
                    <div class="contact-production__gallery-img">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/metallicheskie/metallicheskie-img-1.jpg" alt="img">
                    </div>
                    <div class="contact-production__gallery-img">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/metallicheskie/metallicheskie-img-2.jpg" alt="img">
                    </div>
                    <div class="contact-production__gallery-img">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/metallicheskie/metallicheskie-img-3.jpg" alt="img" >
                    </div>
                  </div>

                  <div class="metallicheskie-box">
                      <div class="metallicheskie-box__wrapper">
                        <div class="metallicheskie-box__img">
                          <img src="<?php echo get_template_directory_uri()?>/assets/images/metallicheskie/metallicheskie-img-4.jpg" alt="img">
                        </div>
                        <div class="metallicheskie-box__img">
                          <img src="<?php echo get_template_directory_uri()?>/assets/images/metallicheskie/metallicheskie-img-5.jpg" alt="img">
                        </div>
                        <div class="metallicheskie-box__img">
                          <img src="<?php echo get_template_directory_uri()?>/assets/images/metallicheskie/metallicheskie-img-6.jpg" alt="img">
                        </div>
                        <div class="metallicheskie-box__img">
                          <img src="<?php echo get_template_directory_uri()?>/assets/images/metallicheskie/metallicheskie-img-7.jpg" alt="img">
                        </div>
                        <div class="metallicheskie-box__img">
                          <img src="<?php echo get_template_directory_uri()?>/assets/images/metallicheskie/metallicheskie-img-8.jpg" alt="img">
                        </div>
                      </div>

                      <div class="metallicheskie-box__wrapper metallicheskie-box__wrapper--hidden">
                        <div class="metallicheskie-box__img">
                          <img src="<?php echo get_template_directory_uri()?>/assets/images/metallicheskie/metallicheskie-img-4.jpg" alt="img">
                        </div>
                        <div class="metallicheskie-box__img">
                          <img src="<?php echo get_template_directory_uri()?>/assets/images/metallicheskie/metallicheskie-img-5.jpg" alt="img">
                        </div>
                        <div class="metallicheskie-box__img">
                          <img src="<?php echo get_template_directory_uri()?>/assets/images/metallicheskie/metallicheskie-img-6.jpg" alt="img">
                        </div>
                        <div class="metallicheskie-box__img">
                          <img src="<?php echo get_template_directory_uri()?>/assets/images/metallicheskie/metallicheskie-img-7.jpg" alt="img">
                        </div>
                        <div class="metallicheskie-box__img">
                          <img src="<?php echo get_template_directory_uri()?>/assets/images/metallicheskie/metallicheskie-img-8.jpg" alt="img">
                        </div>
                      </div>
                      <button class="metallicheskie-box__wrapper-btn btn">Показать ещё</button>
                  </div>
                </div>
                
            </div>

          
        </div>
      </section>
      
       <section class="feedback feedback--contact">
        <div class="container">
          <div class="feedback-block">
            <div class="feedback-block__left">
              <h3 class="feedback-block__lefr-title title">
                Где установлены наши объекты
              </h3>
             
            </div>

            <div class="feedback-block__right">
             
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

      <section class="about-home about-home--metallicheckie">
        <div class="container">
          <div class="about-home__block">
            <h3 class="about-home__block-title title">О нас</h3>
            <div class="about-home__box">
              <div class="about-home__number">
                <div class="about-home__item">
                  <div class="about-home__item-title">1, 000, 000</div>
                  <div class="about-home__item-text">Выполненных проектов</div>
                </div>
                <div class="about-home__item">
                  <div class="about-home__item-title">20</div>
                  <div class="about-home__item-text">Лет упорного труда</div>
                </div>
                <div class="about-home__item">
                  <div class="about-home__item-title">500</div>
                  <div class="about-home__item-text">Сотрудников</div>
                </div>

                <a href="#" class="about-home__number-btn">Каталог</a>
              </div>
              <div class="about-home__info">
                <div class="about-home__info-img">
                  <img class="about-home__info-img--img"  src="<?php echo get_template_directory_uri();?>/assets/images/home/play-bg.jpg" alt="img">
                  <a href="<?php the_field('video_ssylka');?>" class="about-home__info-play">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/home/bg-arrows-play.svg" alt="img">
                  </a>
                </div>
               
                <div class="about-home__info-title">
                  Сферой деятельности завода металлоконструкций «ДЕЛСНАБ» является:
                </div>
                <ul class="about-home__list">
                  <li class="about-home__list-item">
                    производство и монтаж металлоконструкций;
                  </li>
                  <li class="about-home__list-item">
                    проектирование — разработка пакета технической документации,в который входят инженерные расчеты, схемы, чертежи, пояснительные записки;
                  </li>
                  <li class="about-home__list-item">
                    выпуск металлических изделий (в т.ч. из нержавеющей стали)
                  </li>
                  <li class="about-home__list-item">
                    обработка и продажа металлов.
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="certificates-slider certificates-slider--metallicheckie">
        <div class="container">
          <h3 class="certificates-slider__title title">Сертификаты и лицензии</h3>
        </div>
        
        <div class="certificates-slider__box">
          <?php if(have_rows('slajder_sertifikaty_kartochka')) : while(have_rows('slajder_sertifikaty_kartochka')): the_row()?>
          <div class="certificates-slider__wrapper">
            <div class="certificates-slider__item">
              <img src="<?php the_sub_field('slajder_sertifikaty_kartochka_kartinka');?>" alt="img">
            </div>
          </div>
          <?php endwhile; endif;?>
        </div>
         
        <div class="certificates-slider__mobile">
          <div class="certificates-slider__box--mobile">
            <?php if(have_rows('slajder_sertifikaty_kartochka')) : while(have_rows('slajder_sertifikaty_kartochka')): the_row()?>
            <div class="certificates-slider__wrapper">
              <div class="certificates-slider__item">
                <img src="<?php the_sub_field('slajder_sertifikaty_kartochka_kartinka');?>" alt="img">
              </div>
            </div>
            <?php endwhile; endif;?>
          </div>
        </div>

        <div class="container">
          <div class="certificates-slider__arrows"></div>
        </div>
        <div class="container">
          <div class="certificates-slider__arrows--mobile"></div>
        </div>
      </section>

     
    </main>
<?php get_footer();?>