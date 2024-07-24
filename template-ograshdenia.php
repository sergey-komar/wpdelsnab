<?php
/**
 * Template Name: Ограждения
 */
?>
<?php get_header();?>
  <main class="main">
      <section class="nershaveika nershaveika--ograzhdinia">
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
              
              <div class="nershaveika-box ograshdenia">
                <h3 class="nershaveika-box__info-title title">Ограждения из нержавейки</h3>
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
                  <div class="ograshdenia-box__info">
                     <?php if(have_rows('ograzhdeniya_kartochka')) : while(have_rows('ograzhdeniya_kartochka')): the_row()?>
                      <div class="ograshdenia-box__item">
                        <img src="<?php the_sub_field('ograzhdeniya_kartochka_kartinka');?>" alt="img" class="ograshdenia-box__item-img">
                        <div class="ograshdenia-box__item-text">
                        <?php the_sub_field('ograzhdeniya_kartochka_zagolovok');?>
                        </div>
                        <ul class="ograshdenia-box__list">
                          <?php if(have_rows('ograzhdeniya_kartochka_spisok')) : while(have_rows('ograzhdeniya_kartochka_spisok')): the_row()?>
                          <li class="ograshdenia-box__list-item">
                          <?php the_sub_field('ograzhdeniya_kartochka_spisok_tekst');?>
                          </li>
                          <?php endwhile; endif;?>
                        </ul>
                      </div>
                      <?php endwhile; endif;?>
                  </div>
                
                  <div class="nershaveika-box__number ograshdenia-box__number">
                      <h3 class="nershaveika-box__number-title title">
                        Ограждение из нержавейки
                      </h3>
                      <p class="nershaveika-box__info-text">
                        Ограждающие конструкции обеспечивают безопасность, комфорт и служат декоративным элементом при оформлении офисов, жилых домов. Наша компания изготавливает лестничные ограждения из нержавейки стандартного типа и предоставленным чертежам.
                      </p>
                      <p class="nershaveika-box__info-text">
                        Также нам можно заказать ограждающие конструкции:
                      </p>

                      <ul class="nershaveika-box__list">
                        <li class="nershaveika-box__list-item">для балкона;</li>
                        <li class="nershaveika-box__list-item">для входных групп;</li>
                        <li class="nershaveika-box__list-item">для кровли.</li>
                      </ul>
                      <p class="nershaveika-box__info-text">
                        Это могут быть конструкции с зеркальной полировкой, двумя или тремя ригелями, заполнением из закаленного стекла.
                      </p>
                      <p class="nershaveika-box__info-text">
                        Нержавеющая сталь не содержит токсичных компонентов, полируется до зеркального блеска и хорошо сочетается с пластиком, стеклом и деревом. 
                      </p>
                      <p class="nershaveika-box__info-text">
                        Изделия из нержавейки – прочные, стойкие к воздействию влаги, механическим повреждениям. Они не подвержены коррозии, поэтому могут использоваться на открытом воздухе.
                      </p>
                      
                      <h3 class="nershaveika-box__number-title title">
                        Почему стоит заказать ограждение из нержавейки от компании "Делснаб"
                      </h3>

                      <div class="nershaveika-box__item">
                          <div class="nershaveika-box__item-number">01</div>
                          <div class="nershaveika-box__item-text">
                            Использование нержавеющей стали, качество которой подтверждается сертификатом;
                          </div>
                      </div>
                      <div class="nershaveika-box__item">
                          <div class="nershaveika-box__item-number">02</div>
                          <div class="nershaveika-box__item-text">
                            Выполнение всех видов металлообработки, полировка;
                          </div>
                      </div>
                      <div class="nershaveika-box__item">
                          <div class="nershaveika-box__item-number">03</div>
                          <div class="nershaveika-box__item-text">
                            Закупка материала по оптовым ценам – наши клиенты не платят посредникам;
                          </div>
                      </div>
                      <div class="nershaveika-box__item">
                          <div class="nershaveika-box__item-number">04</div>
                          <div class="nershaveika-box__item-text">
                            Контроль качества на всех этапах производства металлоконструкций.
                          </div>
                      </div>
                      
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