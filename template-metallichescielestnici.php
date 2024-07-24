<?php
/**
 * Template Name: Металлические лестницы
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
                        Металлические лестницы
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
                       <?php if(have_rows('metallicheskie_lestniczy_kartochka')) : while(have_rows('metallicheskie_lestniczy_kartochka')): the_row()?>
                        <div class="metalllest-block__item">
                          <img src="<?php the_sub_field('metallicheskie_lestniczy_kartochka_izobrazhenie');?>" alt="img" class="metalllest-block__item-img">
                          <div class="metalllest-block__item-title">
                          <?php the_sub_field('metallicheskie_lestniczy_kartochka_zagolovok');?>
                          </div>
          
                            <ul class="metal-box__list">
                            <?php if(have_rows('metallicheskie_lestniczy_kartochka_spisok')) : while(have_rows('metallicheskie_lestniczy_kartochka_spisok')): the_row()?>
                              <li class="metal-box__list-item metal-box__list-item--lestnicy">
                              <?php the_sub_field('metallicheskie_lestniczy_kartochka_spisok_tekst');?>
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
              <h3 class="lestzakaz-block__title title">Металлические лестницы на заказ</h3>
              <div class="lestzakaz-box">
                <p class="lestzakaz-box__text">
                  Благодаря прогрессивным технологиям, использованию сертифицированных материалов, все металлоконструкции отвечают действующим стандартам и требованиям безопасности, служат долго и не покрываются коррозией.
                </p>
                <p class="lestzakaz-box__text">
                  Приглашаем к сотрудничеству частных заказчиков, строительные и производственные компании. У нас можно купить готовые лестницы со стандартными параметрами или заказать изготовление нестандартной модели на металлическом каркасе. За счет собственного производства наша цена на металлические лестницы устанавливается на минимальном уровне и не включает дополнительных наценок
                </p>

                <div class="lestzakaz-box-line"></div>
                <div class="lestzakaz-box__title">
                  Разновидности металлических лестниц по своим конструктивным особенностям и материалам
                </div>

                <p class="lestzakaz-box__text">
                  Металл – универсальный материал, который выдерживает высокие нагрузки, сочетается с деревом и стеклом. Устанавливают такие лестницы в домах, офисах, на входе в здания. В зависимости от особенностей конструкции у нас можно заказать металлические лестницы таких видов:
                </p>
                <div class="nershaveika-box__number">
                  <div class="nershaveika-box__item">
                      <div class="nershaveika-box__item-number">01</div>
                      <div class="nershaveika-box__item-text">
                        Маршевые – имеют прямолинейные пролеты с поворотом друг относительно друга под определенным углом.
                      </div>
                  </div>
                  <div class="nershaveika-box__item">
                      <div class="nershaveika-box__item-number">02</div>
                      <div class="nershaveika-box__item-text">
                        Радиальные – представляют собой подъем по плавно поднимающейся линии, используются в дизайнерских интерьерах.
                      </div>
                  </div>
                  <div class="nershaveika-box__item">
                      <div class="nershaveika-box__item-number">03</div>
                      <div class="nershaveika-box__item-text">
                        Винтовые – секция, поднимаясь, огибает центральную опору.
                      </div>
                  </div>
                  <div class="nershaveika-box__item">
                      <div class="nershaveika-box__item-number">04</div>
                      <div class="nershaveika-box__item-text">
                        С забежными ступеньками – устанавливают в ограниченном пространстве.
                      </div>
                  </div>
                </div>

                <div class="lestzakaz-box-line"></div>
                <p class="lestzakaz-box__text">
                  Классификация конструкций по материалу:
                </p>
                <div class="nershaveika-box__number">
                  <div class="nershaveika-box__item">
                      <div class="nershaveika-box__item-number">01</div>
                      <div class="nershaveika-box__item-text">
                        Из черного металла
                      </div>
                  </div>
                  <div class="nershaveika-box__item">
                      <div class="nershaveika-box__item-number">02</div>
                      <div class="nershaveika-box__item-text">
                        Из нержавеющей стали
                      </div>
                  </div>
                  <div class="nershaveika-box__item">
                      <div class="nershaveika-box__item-number">03</div>
                      <div class="nershaveika-box__item-text">
                        Алюминиевые
                      </div>
                  </div>
                </div>
                <div class="lestzakaz-box-line"></div>

                <div class="lestzakaz-box__title">
                 
                  В чём состоят основные преимущества утсановки лестниц из металла?
                </div>

                <p class="lestzakaz-box__text">
                  Преимущественными характеристиками металлоконструкций является:
                </p>
                <div class="nershaveika-box__number">
                  <div class="nershaveika-box__item">
                      <div class="nershaveika-box__item-number">01</div>
                      <div class="nershaveika-box__item-text">
                        Прочность, стойкость к влаге, перепадам температуры.
                      </div>
                  </div>
                  <div class="nershaveika-box__item">
                      <div class="nershaveika-box__item-number">02</div>
                      <div class="nershaveika-box__item-text">
                        Максимальная степень пожарной безопасности.
                      </div>
                  </div>
                  <div class="nershaveika-box__item">
                      <div class="nershaveika-box__item-number">03</div>
                      <div class="nershaveika-box__item-text">
                        Разнообразие форм и дизайна, сочетаемость с другими материалами.
                      </div>
                  </div>
                  <div class="nershaveika-box__item">
                      <div class="nershaveika-box__item-number">04</div>
                      <div class="nershaveika-box__item-text">
                        Срок эксплуатации составляет 50 лет.
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
                По чему для производства металлических лестниц стоит обращаться к нам?
              </h3>
              <div class="metallnam-box">
                <p class="metallnam-box__text">
                  У нас в продаже лестницы любого назначения и типа, изготовленные по типовым чертежам. Быстро и недорого мы изготовим конструкцию по предоставленным размерам или эскизам, под заказ – покрасим в любой цвет или нанесем защитное покрытие.
                </p>
                <p class="metallnam-box__text">
                  Стоимость зависит от материала и модели. Готовые конструкции доставляются по Москве и устанавливаются на объекте, после чего предоставляется гарантия.
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