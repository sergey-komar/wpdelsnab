<?php
/**
 * Template Name: Металлоизделия
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
                   
                      <h3 class="nershaveika-box__number-title title">
                       Металлоизделия
                      </h3>
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
        </section>

        <section class="lestzakaz">
          <div class="container">
            <div class="lestzakaz-block">
              <h3 class="lestzakaz-block__title title">Металлоизделия</h3>
              <div class="lestzakaz-box">
                <p class="lestzakaz-box__text">
                  Конструкции из металла используются не только в промышленности. Они являются частью современной архитектуры, их выбирают дизайнеры для создания интерьерных и ландшафтных композиций. Качественные металлоизделия на заказ изготовит наша компания. Это могут быть сборные, сварные металлоконструкции из нержавеющей стали, черного металла.
                </p>
                <p class="lestzakaz-box__text">
                  Их основными «плюсами» является:
                </p>

                <div class="nershaveika-box__number">
                  <div class="nershaveika-box__item">
                      <div class="nershaveika-box__item-number">01</div>
                      <div class="nershaveika-box__item-text">
                        возможность создания разных форм, в т.ч. со сложной конфигурацией;
                      </div>
                  </div>
                  <div class="nershaveika-box__item">
                      <div class="nershaveika-box__item-number">02</div>
                      <div class="nershaveika-box__item-text">
                        универсальность – могут использоваться на улице и внутри зданий;
                      </div>
                  </div>
                  <div class="nershaveika-box__item">
                      <div class="nershaveika-box__item-number">03</div>
                      <div class="nershaveika-box__item-text">
                        стойкость к воздействию влаги, ультрафиолета, перепаду температуры;
                      </div>
                  </div>
                  <div class="nershaveika-box__item">
                      <div class="nershaveika-box__item-number">04</div>
                      <div class="nershaveika-box__item-text">
                        долговечный период эксплуатации.
                      </div>
                  </div>
                </div>
                <p class="lestzakaz-box__text">
                  Для защиты от агрессивных факторов окружающей среды изделия покрывают специальным составом, что значительно упрощает уход за ними.
                </p>


                <div class="lestzakaz-box-line"></div>
                <div class="lestzakaz-box__title">
                  Изготовление металлоизделий на заказ от компании "ДЕЛСНАБ"
                </div>
                <p class="lestzakaz-box__text">
                  У нас можно купить следующие виды металлических изделий:
                </p>
                <div class="nershaveika-box__number">
                  <div class="nershaveika-box__item">
                      <div class="nershaveika-box__item-number">01</div>
                      <div class="nershaveika-box__item-text">
                        Рекламные конструкции;
                      </div>
                  </div>
                  <div class="nershaveika-box__item">
                      <div class="nershaveika-box__item-number">02</div>
                      <div class="nershaveika-box__item-text">
                        Козырьки и навесы;
                      </div>
                  </div>
                  <div class="nershaveika-box__item">
                      <div class="nershaveika-box__item-number">03</div>
                      <div class="nershaveika-box__item-text">
                        Столы, беседки, мангалы;
                      </div>
                  </div>
                  <div class="nershaveika-box__item">
                      <div class="nershaveika-box__item-number">04</div>
                      <div class="nershaveika-box__item-text">
                        Скамейки и ворота;
                      </div>
                  </div>
                  <div class="nershaveika-box__item">
                      <div class="nershaveika-box__item-number">05</div>
                      <div class="nershaveika-box__item-text">
                        Кованые ограждения, решетки, лестницы.
                      </div>
                  </div>
                </div>

                
                <p class="lestzakaz-box__text">
                  Цена 1 тонны зависит от вида конструкции и способа металлообработки – гибка, художественная ковка, сварка.
                </p>
                <div class="lestzakaz-box-line"></div>

                <div class="lestzakaz-box__title">
                  Особенности производства металлоизделий по чертежам заказчика
                </div>

                <p class="lestzakaz-box__text">
                  Металлоконструкции, которые мы изготавливаем по предоставленным параметрам, готовы к установке. Производство предполагает следующие этапы:
                </p>
                <div class="nershaveika-box__number">
                  <div class="nershaveika-box__item">
                      <div class="nershaveika-box__item-number">01</div>
                      <div class="nershaveika-box__item-text">
                        Раскрой материала по имеющимся чертежам;
                      </div>
                  </div>
                  <div class="nershaveika-box__item">
                      <div class="nershaveika-box__item-number">02</div>
                      <div class="nershaveika-box__item-text">
                        Подготовка шаблона;
                      </div>
                  </div>
                  <div class="nershaveika-box__item">
                      <div class="nershaveika-box__item-number">03</div>
                      <div class="nershaveika-box__item-text">
                        Гибка или другой вид обработки;
                      </div>
                  </div>
                  <div class="nershaveika-box__item">
                      <div class="nershaveika-box__item-number">04</div>
                      <div class="nershaveika-box__item-text">
                        Соединение всех элементов способом, который заказал клиент;
                      </div>
                  </div>
                  <div class="nershaveika-box__item">
                      <div class="nershaveika-box__item-number">05</div>
                      <div class="nershaveika-box__item-text">
                        Обработка сварных швов, углов, подготовка к окрашиванию;
                      </div>
                  </div>
                  <div class="nershaveika-box__item">
                      <div class="nershaveika-box__item-number">06</div>
                      <div class="nershaveika-box__item-text">
                        Покраска поверхностей.
                      </div>
                  </div>
                </div>

                <p class="lestzakaz-box__text">
                  Под заказ мы доставим конструкцию по Москве и Московской области и выполним монтаж.
                </p>
              </div>
            </div>
          </div>
        </section>

       
      
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