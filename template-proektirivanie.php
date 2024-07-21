<?php
/**
 * Template Name: Проектирование
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
                            <li><a class="aside--active" href="http://delshab/proektnye-raboty/">Проектирование</a></li>
                        </ul>
                    </aside>
                    
                    <div class="nershaveika-box nershaveika-box--lestnici nershaveika-box--proectirovanie">
                    <div class="nershaveika-box__number">
                        <h3 class="nershaveika-box__number-title title">
                        Проектирование металлоконструкций
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
                    
                        <p class="nershaveika-box__info-text">
                        Перед изготовлением металлических конструкций обязательно разрабатывают пакет технической документации, которая включает чертежи, схемы, пояснительные записки, инженерные расчеты. Выполнять проектирование металлоконструкций могут только профильные специалисты. 
                        </p>
                        <p class="nershaveika-box__info-text">
                        
                        Профессиональный подход и точность всех параметров проекта обеспечивает:
                        </p>
                    
                        <div class="proectirovanie-box">
                        <div class="nershaveika-box__item">
                            <div class="nershaveika-box__item-number">01</div>
                            <div class="nershaveika-box__item-text">
                            Минимизацию расходов на производство;
                            </div>
                        </div>
                        <div class="nershaveika-box__item">
                            <div class="nershaveika-box__item-number">02</div>
                            <div class="nershaveika-box__item-text">
                            Исключение ошибок во время монтажных работ;
                            </div>
                        </div>
                        <div class="nershaveika-box__item">
                            <div class="nershaveika-box__item-number">03</div>
                            <div class="nershaveika-box__item-text">
                            Минимальные сроки возведения конструкций;
                            </div>
                        </div>
                        <div class="nershaveika-box__item">
                            <div class="nershaveika-box__item-number">04</div>
                            <div class="nershaveika-box__item-text">
                            Согласование с надзорными госорганами;
                            </div>
                        </div>
                        <div class="nershaveika-box__item">
                            <div class="nershaveika-box__item-number">05</div>
                            <div class="nershaveika-box__item-text">
                            Соответствие объекта нормам государственных стандартов и строительных правил.
                            </div>
                        </div>
                        </div>
                    
                    
                    </div>
                        <div class="nershaveika-box__info nershaveika-box__info--proectirovanie">
                            <h3 class="nershaveika-box__info-title title">
                            Услуги по проектированию металлоконструкций от специалистов завода "Делснаб"
                            </h3>
                            <p class="nershaveika-box__info-text">
                            Наша компания разрабатывает проекты конструкций из металла для потребностей гражданского и промышленного строительства. Работы выполняются в такой последовательности:
                            осмотр стройплощадки для позиционирования сооружения;
                            разработка разделов АР, КР, КМ, КМД.
                            </p>
                            <p class="nershaveika-box__info-text">
                            Клиент получает полный пакет документации – чертежи, спецификации, сметы, которые необходимы для государственной экспертизы и выполнения строительно-монтажных работ.
                            </p>
                            <p class="nershaveika-box__info-text">
                            Стоимость за тонну можно посмотреть в этом разделе. Под заказ мы изготавливаем металлоизделия любой сложности, доставляем и устанавливаем их в Москве.
                            </p>
                        </div> 
                    </div>
                </div>
            </div>
       </section>

       <section class="proectirovanie-price">
        <div class="container">
          <div class="proectirovanie-price__block">
            <h3 class="proectirovanie-price__block-title title">цены</h3>
            <div class="proectirovanie-price__box">
              <div class="proectirovanie-price__wrapper">
                <?php if(have_rows('proektirovanie_czeny_tablicza')) : while(have_rows('proektirovanie_czeny_tablicza')): the_row()?>
                <div class="proectirovanie-price__item">
                  <div class="proectirovanie-price__item-text">
                  <?php the_sub_field('proektirovanie_czeny_tablicza_naimenovanie');?>
                  </div>
                  <div class="proectirovanie-price__item-text">
                  <?php the_sub_field('proektirovanie_czeny_tablicza_czena');?>
                  </div>
                </div>
                <?php endwhile; endif;?>
              </div>
              
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
                                <input type="text" class="are-wrapper__form-input" placeholder="Имя">
                                <input type="text" class="are-wrapper__form-input" placeholder="Email">
                                <input type="text" class="are-wrapper__form-input" placeholder="Сообщение">
                                <div class="are-wrapper__file">
                                    <input type="file">
                                </div>
                                <div class="are-wrapper__text">
                                    <input type="checkbox" class="are-wrapper__form-checkbox">
                                    <p>Я даю согласие на обработку своих персональных данных</p>
                                </div>
                                <button class="are-wrapper__form-btn btn">Рассчитать</button>
                                </div>
                                <img src="<?php echo get_template_directory_uri()?>/assets/images/home/form-bg.jpg" alt="img" class="are-wrapper__info-img">
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