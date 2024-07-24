<?php
/**
 * Template Name: Закладные детали
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
                      <a href="http://delshab/metallokonstrukcii/">Металлические конструкции</a>
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

            <div class="metalllest">
              
              <h3 class="nershaveika-box__number-title title">
                Закладные детали
                </h3>
                <div class="filter">
                  <div class="search__wrapper-filter">
                      Фильтры
                  </div>
                  <aside class="aside sidebar--mobile">
                    <ul>
                          <li>
                              <a href="http://delshab/metallokonstrukcii/">Металлические конструкции</a>
                                  <?php
                                      wp_nav_menu([
                                        'theme_location' => 'menu-metall',
                                        'menu_class' => 'aside-menu',
                                        'container' => ''
                                      ]);
                                    ?>
                          </li> 
                            <li>
                                <a class="aside--active" href="http://delshab/izdeliya-iz-nerzhavejki/">Изделия из нержавейки</a>
                                
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
              <div class="metalllest-block">
                <?php if(have_rows('kategorii_kartochka')) : while(have_rows('kategorii_kartochka')): the_row()?>
                <div class="metalllest-block__item">
                  <img src="<?php the_sub_field('kategorii_kartochka_kartinka');?>" alt="img" class="metalllest-block__item-img">
                  <div class="metalllest-block__item-title">
                  <?php the_sub_field('kategorii_kartochka_zagolovok');?>
                  </div>
                  <ul class="metal-box__list">
                    <?php if(have_rows('kategorii_kartochka_spisok')) : while(have_rows('kategorii_kartochka_spisok')): the_row()?>
                      <li class="metal-box__list-item metal-box__list-item--lestnicy">
                      <?php the_sub_field('kategorii_kartochka_spisok_tekst');?>
                      </li>
                      <?php endwhile; endif;?>
                    </ul>
                </div>
                <?php endwhile; endif;?>
              </div>
              
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="lestzakaz zakladnie">
      <div class="container">
        <div class="lestzakaz-block">
          <h3 class="lestzakaz-block__title title">Закладные детали</h3>
          <div class="lestzakaz-box">
            <p class="lestzakaz-box__text">
              Чтобы соединить элементы в единую конструкцию или прикрепить навесное оборудование используют специальные приспособления. У нас можно купить закладные детали, которые широко применяются в сборном и монолитном строительстве. Их использование повышает скорость возведения здания, упрощает монтаж и снижает сметную стоимость строительных работ.
            </p>
            

            <div class="lestzakaz-box-line"></div>
            <div class="lestzakaz-box__title">
              Качественное изготовление закладных деталей на заводе  "ДЕЛСНАБ"
            </div>

            <p class="lestzakaz-box__text">
              Технология производства металлодеталей зависит от необходимой прочности. Для изготовления используется высококачественный листовой или фасонный металлопрокат,арматура. Поэтому изделия выдерживают высокие нагрузки во время СМР и эксплуатации.
            </p>
            <p class="lestzakaz-box__text">
              По ГОСТу мы изготавливаем следующие виды:
            </p>

            <div class="nershaveika-box__number">
              <div class="nershaveika-box__item">
                  <div class="nershaveika-box__item-number">01</div>
                  <div class="nershaveika-box__item-text">
                    Закрытые – используются в строительстве, имеют пластины с двух сторон анкерных прутов;
                  </div>
              </div>
              <div class="nershaveika-box__item">
                  <div class="nershaveika-box__item-number">02</div>
                  <div class="nershaveika-box__item-text">
                    Открытые – универсального типа с одной пластиной.
                  </div>
              </div>
            </div>

            <p class="lestzakaz-box__text">
              Стержни могут располагаться перпендикулярно или наклонно, пластинки изготавливают в форме ромба, трапеции, квадрата. Мы применяем современные технологии, которые направлены на экономный расход материала.
            </p>
            <p class="lestzakaz-box__text">
              Обработку металла выполняют профессиональные мастера, поэтому качество готовых металлоизделий гарантировано. Под заказ мы обеспечиваем доставку заказов по Москве и области.
            </p>

            <div class="lestzakaz-box-line"></div>

            <div class="lestzakaz-box__title">
              Типовые изделия
            </div>

            <div class="zakladnie-box">
              <?php if(have_rows('tipovye_izdeliya_kartochka')) : while(have_rows('tipovye_izdeliya_kartochka')): the_row()?>
              <div class="zakladnie-box__img">
                <img src="<?php the_sub_field('tipovye_izdeliya_kartochka_kartinka');?>" alt="img">
              </div>
              <?php endwhile; endif;?>
            </div>

            <div class="lestzakaz-box__title">
              По индивидуальным чертежам заказчика
            </div>

            <div class="zakladnie-box">
              <?php if(have_rows('chertezhi_zakazchika_kartochka')) : while(have_rows('chertezhi_zakazchika_kartochka')): the_row()?>
              <div class="zakladnie-box__img">
                <img src="<?php the_sub_field('chertezhi_zakazchika_kartochka_kartinka');?>" alt="img">
              </div>
              <?php endwhile; endif;?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="lestzakaz-box__title lestzakaz-box__title--mobile">
      Типовые изделия
    </div>
    <div class="zakladnie-box zakladnie-box--mobile">
      <div class="zakladnie-box__img">
        <img src="./images/zakladniedetail/zakladniedetail-2.jpg" alt="img">
      </div>
      <div class="zakladnie-box__img">
        <img src="./images/zakladniedetail/zakladniedetail-3.jpg" alt="img">
      </div>
      <div class="zakladnie-box__img">
        <img src="./images/zakladniedetail/zakladniedetail-4.jpg" alt="img">
      </div>
    </div>
    <div class="lestzakaz-box__title lestzakaz-box__title--mobile">
      По индивидуальным чертежам заказчика
    </div>
    <div class="zakladnie-box zakladnie-box--mobile">
      <div class="zakladnie-box__img">
        <img src="./images/zakladniedetail/zakladniedetail-5.jpg" alt="img">
      </div>
      <div class="zakladnie-box__img">
        <img src="./images/zakladniedetail/zakladniedetail-6.jpg" alt="img">
      </div>
      <div class="zakladnie-box__img">
        <img src="./images/zakladniedetail/zakladniedetail-7.jpg" alt="img">
      </div>
      <div class="zakladnie-box__img">
        <img src="./images/zakladniedetail/zakladniedetail-8.jpg" alt="img">
      </div>
      <div class="zakladnie-box__img">
        <img src="./images/zakladniedetail/zakladniedetail-1.jpg" alt="img">
      </div>
    </div>
    
    <section class="are are--contact">
      <div class="container">
          <div class="are-block">
          <h3 class="are-block__title title">заказать обратный звонок</h3>
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
                          <img src="<?php echo get_template_directory_uri();?>/assets/images/home/form-bg.jpg" alt="img" class="are-wrapper__info-img">
                      </div>
                      </div>
              </div>
              
          </div>
          </div>
      </div>
    </section>

    <section class="portfolio-slider">
      <div class="container">
        <h3 class="portfolio-slider__title title">Наши работы</h3>
      </div>

      <div class="portfolio-slider__box">
        <?php if(have_rows('slajder_portfolio_kartochka')) : while(have_rows('slajder_portfolio_kartochka')): the_row()?>
        <div class="portfolio-slider__wrapper">
          <div class="portfolio-slider__item">
            <img src="<?php the_sub_field('slajder_portfolio_kartochka_kartinka');?>" class="portfolio-slider__item-img" alt="img">
            <div class="portfolio-slider__item-text">
            <?php the_sub_field('slajder_portfolio_kartochka_zagolovok');?>
            </div>
          </div>
        </div>
        <?php endwhile; endif;?>
      </div>

      <div class="portfolio-slider__mobile">
            <div class="portfolio-slider__box--mobile">
              <?php if(have_rows('slajder_portfolio_kartochka')) : while(have_rows('slajder_portfolio_kartochka')): the_row()?>
              <div class="portfolio-slider__wrapper">
                <div class="portfolio-slider__item">
                  <img src="<?php the_sub_field('slajder_portfolio_kartochka_kartinka');?>" class="portfolio-slider__item-img" alt="img">
                  <div class="portfolio-slider__item-text">
                  <?php the_sub_field('slajder_portfolio_kartochka_zagolovok');?>
                  </div>
                </div>
              </div>
              <?php endwhile; endif;?>
            </div>
      </div>

      <div class="container">
        <div class="portfolio-slider__arrows"></div>
      </div>
      <div class="container">
        <div class="portfolio-slider__arrows--mobile"></div>
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
  </main>
<?php get_footer();?>