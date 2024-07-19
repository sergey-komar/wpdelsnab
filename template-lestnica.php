<?php
/**
 * Template Name: Лестницы
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
                  <div class="nershaveika-box__number">
                    <h3 class="nershaveika-box__number-title title">
                      Лестницы из нержавейки
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
                      Лестница – обязательный элемент многоэтажного жилого дома, офиса или загородного коттеджа. Самой прочной, безопасной и эстетичной является лестница из нержавейки – конструкция, которую можно заказать нашей компании с выбором типа и дизайна.
                    </p>
                    <p class="nershaveika-box__info-text">
                      На практике чаще всего используют такие типы:
                    </p>
                  
                    <div class="nershaveika-box__item">
                        <div class="nershaveika-box__item-number">01</div>
                        <div class="nershaveika-box__item-text">
                          Маршевые – распространенная конструкция, которую используют в зданиях со стандартной планировкой. Имеют высокую пропускную способность, поэтому используются в офисах, медицинских центрах и других зданиях с большим количеством посетителей.
                        </div>
                    </div>
                    <div class="nershaveika-box__item">
                        <div class="nershaveika-box__item-number">02</div>
                        <div class="nershaveika-box__item-text">
                          Винтовые – применяются в ограниченном пространстве или как элемент дизайнерского проекта. У нас есть гибочное оборудование с ЧПУ, поэтому такая модель изготавливается с максимальной точностью.
                        </div>
                    </div>
                    <div class="nershaveika-box__item">
                        <div class="nershaveika-box__item-number">03</div>
                        <div class="nershaveika-box__item-text">
                          Хребтовая – собирается из отдельных частей, не имеет целых косоуров, поэтому может огибать любые конструкции. За счет возможности нестандартной конфигурации подходит для высокотехнологичных интерьеров.
                        </div>
                    </div>
                  
                </div>
                    <div class="nershaveika-box__info">
                        <h3 class="nershaveika-box__info-title title">
                          Качественное изготовление лестниц из нержавейки на заказ от "Делснаб"
                        </h3>
                        <p class="nershaveika-box__info-text">
                          Для изготовления мы используем металл высокого качества, круглый и профильный металлопрокат. Ограждающие элементы могут быть дополнены закаленным стеклом, площадками, перилами. Если у Вас нет проекта, мы подготовим его и изготовим металлоконструкцию с учетом всех требований.
                        </p>
                        <p class="nershaveika-box__info-text">
                          Мы доставляем металлоконструкции по Москве и Московской области, выполняем монтажные работы. После приемки заказчиком предоставляем официальную гарантию.
                        </p>
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