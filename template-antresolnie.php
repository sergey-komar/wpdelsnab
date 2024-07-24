<?php
/**
 * Template Name: Антресольные этажи
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
                          <a class="aside--active" href="http://delshab/metallokonstrukcii/">Металлические конструкции</a>
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
                    <div class="container">
                      
                      <div class="antresolinie-wrapper">
                        <h3 class="nershaveika-box__info-title title">Антресольные этажи</h3>
                        <div class="filter">
                          <div class="search__wrapper-filter">
                              Фильтры
                          </div>
                          <aside class="aside sidebar--mobile">
                        <ul>
                          <li>
                              <a class="aside--active" href="http://delshab/metallokonstrukcii/">Металлические конструкции</a>
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
            </div>
          </div>
        </section>

        <section class="lestzakaz">
          <div class="container">
            <div class="lestzakaz-block">
              <h3 class="lestzakaz-block__title title">Антресольные этажи</h3>
              <div class="lestzakaz-box">
               
                <p class="lestzakaz-box__text">
                  Чтобы увеличить полезную площадь в помещении с высоким потолком, используют специальную конструкцию из металла. Устанавливают антресольный этаж в квартирах, ресторанах, на складах. Главным параметром, который учитывают при проектировании, является прочность здания.
                  
                </p>
                <p class="lestzakaz-box__text">
                  В зависимости от технических характеристик помещения и запросов заказчика возможны расчеты с нагрузкой от 200 до 2000 кг на 1 кв. метр, что позволяет использовать свободную площадь для обустройства спальни, склада, кафе.
                </p>
               
                <div class="lestzakaz-box-line"></div>

                <div class="lestzakaz-box__title">
                  Преимущество использования антресольных этажей
                </div>
                <p class="lestzakaz-box__text">
                  Основным «плюсом» антресоли является получение дополнительного пространства при невысокой стоимости конструкции. Полезная площадь в таком случае может увеличиться в 1,5 – 2,0 раза. К остальным достоинствам дополнительного уровня относятся:
                </p>
                <div class="nershaveika-box__number">
                  <div class="nershaveika-box__item">
                      <div class="nershaveika-box__item-number">01</div>
                      <div class="nershaveika-box__item-text">
                        Большие возможности для дизайна;
                      </div>
                  </div>
                  <div class="nershaveika-box__item">
                      <div class="nershaveika-box__item-number">02</div>
                      <div class="nershaveika-box__item-text">
                        Монтаж дополнительного яруса обойдется дешевле покупки нового здания;
                      </div>
                  </div>
                  <div class="nershaveika-box__item">
                      <div class="nershaveika-box__item-number">03</div>
                      <div class="nershaveika-box__item-text">
                        Визуальная коррекция пространства.
                      </div>
                  </div>
                
                </div>
                <p class="lestzakaz-box__text">
                  Сейчас такие решения являются модным трендом и широко применяются при строительстве жилой и коммерческой недвижимости.
                </p>


                <div class="lestzakaz-box-line"></div>
                <div class="lestzakaz-box__title">
                  Выгодные цены на антресольные этажи в компании "ДЕЛСНАБ"
                </div>
                <p class="lestzakaz-box__text">
                  У нас можно купить металлоконструкции разного вида и назначения. Вы можете заказать изготовление металлического полуэтажа по собственным чертежам или его проектирование с нуля.
                </p>
            
                <p class="lestzakaz-box__text">
                  Наша компания имеет полный цикл производства металлоконструкций, выполняет все виды металлообработки, поэтому оказывает услуги «под ключ», обеспечивает доставку в пределах Москвы и Московской области и установку металлоконструкции. 
                </p>

                <p class="lestzakaz-box__text">
                  Перед оформлением заказа Вы можете проконсультироваться с нашим менеджерами и получить справочную информацию.
                </p>
               
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