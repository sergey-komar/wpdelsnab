<?php
/**
 * Template Name: Пожарные лестницы
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
                            <a href="http://delshab/izdeliya-iz-nerzhavejki/">Изделия из нержавейки</a>
                            
                            <?php
                                wp_nav_menu([
                                'theme_location' => 'menu-nerzhaveila',
                                'menu_class' => 'aside-menu',
                                'container' => ''
                                ]);
                            ?>
                          </li>
                        <li><a  href="http://delshab/proektnye-raboty/">Проектирование</a></li>
                    </ul>
                </aside>
                
                <div class="nershaveika-box nershaveika-box--lestnici">

                  <div class="metalllest">
                    
                    <h3 class="nershaveika-box__number-title title">
                      Пожарные лестницы
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
                                <a href="http://delshab/izdeliya-iz-nerzhavejki/">Изделия из нержавейки</a>
                                
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
                       <?php if(have_rows('pozharnye_lestniczy_kartochka')) : while(have_rows('pozharnye_lestniczy_kartochka')): the_row()?>
                        <div class="metalllest-block__item">
                          <img src="<?php the_sub_field('pozharnye_lestniczy_kartochka_kartinka');?>" alt="img" class="metalllest-block__item-img">
                          <div class="metalllest-block__item-title">
                          <?php the_sub_field('pozharnye_lestniczy_kartochka_zagolovok');?>
                          </div>
                          <ul class="metal-box__list">
                            <?php if(have_rows('pozharnye_lestniczy_spisok')) : while(have_rows('pozharnye_lestniczy_spisok')): the_row()?>
                              <li class="metal-box__list-item metal-box__list-item--lestnicy">
                              <?php the_sub_field('pozharnye_lestniczy_spisok_tekst');?>
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
              <h3 class="lestzakaz-block__title title">Пожарные лестницы</h3>
              <div class="lestzakaz-box">
                <p class="lestzakaz-box__text">
                  Для тушения пожаров в зданиях и проведения спасательных работ используется металлическая пожарная лестница. Она помогает работникам и посетителям быстро покинуть горящий объект, а пожарным – проникнуть в очаг возгорания и обеспечить его ликвидацию. Поэтому такие металлоконструкции должны отвечать нормам ГОСТа, быть прочными и безопасными.
                </p>
               

                <div class="lestzakaz-box-line"></div>
                <div class="lestzakaz-box__title">
                  Особенности лестниц из металла
                </div>

                <p class="lestzakaz-box__text">
                  Вертикальные. Состоят из отдельных модулей, которые жестко соединяются ступеньками. В комплект входит платформа с перилами для выхода на крышу, защитные ограждения, крепежные элементы.
                </p>
                <p class="lestzakaz-box__text">
                  Маршевую. Используют для оборудования дополнительного эвакуационного выхода со второго уровня. С одной стороны ее можно прикрепить к вертикальной поверхности или поставить на колонны.
                </p>
                <p class="lestzakaz-box__text">
                  Маршевые многопролетные. Прямые и поворотные с двумя маршами устанавливают на запасном выходе со 2-го или 3-го этажа.
                </p>
              
                <div class="lestzakaz-box-line"></div>

                <div class="lestzakaz-box__title">
                  Изготовление пожарных лестниц в компании "ДЕЛСНАБ"
                </div>

                <p class="lestzakaz-box__text">
                  Мы изготавливаем все типы наружных и внутренних лестниц с использованием сертифицированного материала и точным соблюдением параметров. Все нашим металлоконструкции имеют следующие характеристики:
                </p>
                <img src="<?php echo get_template_directory_uri();?>/assets/images/posharnielestnici/posharnielestnici-bg.jpg" alt="img" class="lestzakaz-box__img">

                <div class="nershaveika-box__number">
                  <div class="nershaveika-box__item">
                      <div class="nershaveika-box__item-number">01</div>
                      <div class="nershaveika-box__item-text">
                        Прочно крепятся к бетонной, кирпичной, гранитной поверхности;
                      </div>
                  </div>
                  <div class="nershaveika-box__item">
                      <div class="nershaveika-box__item-number">02</div>
                      <div class="nershaveika-box__item-text">
                        Выдерживают высокие нагрузки;
                      </div>
                  </div>
                  <div class="nershaveika-box__item">
                      <div class="nershaveika-box__item-number">03</div>
                      <div class="nershaveika-box__item-text">
                        Устойчивы к воздействию коррозии за счет оцинкованного покрытия;
                      </div>
                  </div>
                  <div class="nershaveika-box__item">
                      <div class="nershaveika-box__item-number">04</div>
                      <div class="nershaveika-box__item-text">
                        Отвечают нормам пожарной безопасности, ГОСТ и СНиП.
                      </div>
                  </div>
                </div>

              
              </div>
            </div>
          </div>
        </section>

        <section class="metallnam">
          <div class="container">
            <div class="metallnam-block">
              <h3 class="metallnam-block__title title">
                ВИДЫ ПОЖАРНЫХ ЛЕСТНИЦ
              </h3>
              <div class="metallnam-box">
                <p class="metallnam-box__text">
                  У нас в продаже лестницы любого назначения и типа, изготовленные по типовым чертежам. Быстро и недорого мы изготовим конструкцию по предоставленным размерам или эскизам, под заказ – покрасим в любой цвет или нанесем защитное покрытие.
                </p>
                <div class="table-box">
                  <?php the_content();?>
                </div>
              </div>
            </div>
          </div>
        </section>
      
        <section class="are are--contact are--metallicheckielestnicy">
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