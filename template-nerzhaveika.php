<?php
/**
 * Template Name: Изделия из нержавейки
 */
?>
<?php get_header();?>
    <main class="main">
       <section class="nershaveika">
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

                <div class="nershaveika-box">
                    <div class="nershaveika-box__info">
                        <h3 class="nershaveika-box__info-title title">Изделия из нержавейки</h3>
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
                        <p class="nershaveika-box__info-text">
                            Нержавеющая сталь обладает высокой прочностью и привлекательностью, поэтому ее часто используют для производства ограждающих конструкций и различных декоративных элементов. Наша компания изготавливает изделия из нержавейки на заказ в Москве, доставляет их и производит монтаж.
                        </p>
                        <p class="nershaveika-box__info-text">
                            Нам можно заказать стандартные и нестандартные металлоконструкции следующего вида:
                        </p>
                        <ul class="nershaveika-box__list">
                            <li class="nershaveika-box__list-item">
                                Лестницы. Изготавливаются из трубного металлопроката высокого качества, которые полируется до зеркального блеска. Могут иметь разную конструкцию и дизайн. Самые популярные – на косоурах, тетивах, винтовые.
                            </li>
                            <li class="nershaveika-box__list-item">
                                Перила. Являются элементом лестниц. Кроме декоративных характеристик, нержавеющая сталь обладает высокими гигиеническими свойствами, поверхность легко очищается и практически не накапливает загрязнения.
                            </li>
                            <li class="nershaveika-box__list-item">
                                Ограждения. Используются как часть конструкции лестниц, балконов, пандусов. Могут устанавливаться как на улице, так и внутри зданий.
                            </li>
                        </ul>
                    </div>
                  
                    <div class="nershaveika-box__number">
                        <h3 class="nershaveika-box__number-title title">
                            Преимущества изготовления изделий из нержавейки в компании "Делснаб"
                        </h3>
                        <div class="nershaveika-box__item">
                            <div class="nershaveika-box__item-number">01</div>
                            <div class="nershaveika-box__item-text">
                                Стойкость к износу и длительный период использования без утраты первоначальных свойств;
                            </div>
                        </div>
                        <div class="nershaveika-box__item">
                            <div class="nershaveika-box__item-number">02</div>
                            <div class="nershaveika-box__item-text">
                                Безопасность – прочные сварочный швы и соединения, отсутствие зазубрин и острых граней;
                            </div>
                        </div>
                        <div class="nershaveika-box__item">
                            <div class="nershaveika-box__item-number">03</div>
                            <div class="nershaveika-box__item-text">
                                Универсальность – могут устанавливаться как в помещениях, так и на открытом воздухе;
                            </div>
                        </div>
                        <div class="nershaveika-box__item">
                            <div class="nershaveika-box__item-number">04</div>
                            <div class="nershaveika-box__item-text">
                                Декоративность – идеально отполированная поверхность, возможность создания фигурных элементов.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </section>

       <section class="vacancies vacancies--nershaveika">
        <div class="container">
            <div class="vacancies-block">
                <h3 class="vacancies-block__title title">Мы делаем</h3>
                <div class="vacancies-block__content">
                    <a href="#" class="vacancies-block__item">
                        <img src="./images/nershaveika/nershaveika-1.jpg" alt="img" class="vacancies-block__item-img">
                        <div class="vacancies-block__item-title">Перила</div>
                        <div class="vacancies-block__item-text">
                            Перила из нержавеющей стали - купить перила из нержавейки в Москве
                        </div>
                    </a>
                    <a href="#" class="vacancies-block__item">
                        <img src="./images/nershaveika/nershaveika-2.jpg" alt="img" class="vacancies-block__item-img">
                        <div class="vacancies-block__item-title">Ограждения</div>
                        <div class="vacancies-block__item-text">
                            Ограждения из нержавеющей стали: купить в Москве по цене изготовителя
                        </div>
                    </a>
                    <a href="#" class="vacancies-block__item">
                        <img src="./images/nershaveika/nershaveika-3.jpg" alt="img" class="vacancies-block__item-img">
                        <div class="vacancies-block__item-title">Лестницы</div>
                        <div class="vacancies-block__item-text">
                            Лестницы из нержавеющей стали - производство в Москве
                        </div>
                    </a>
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
                                <img src="./images/home/form-bg.jpg" alt="img" class="are-wrapper__info-img">
                            </div>
                            </div>
                    </div>
                    
                </div>
                </div>
            </div>
        </section>

        <section class="certificates-slider certificates-slider--page">
            <div class="container">
              <h3 class="certificates-slider__title title">наши работы</h3>
            </div>
            
            <div class="certificates-slider__box">
              <div class="certificates-slider__wrapper">
                <div class="certificates-slider__item">
                  <img src="./images/nershaveika/nershaveika-slider-1.jpg" alt="img">
                </div>
              </div>
              <div class="certificates-slider__wrapper">
                <div class="certificates-slider__item">
                  <img src="./images/nershaveika/nershaveika-slider-2.jpg" alt="img">
                </div>
              </div>
              <div class="certificates-slider__wrapper">
                <div class="certificates-slider__item">
                  <img src="./images/nershaveika/nershaveika-slider-3.jpg" alt="img">
                </div>
              </div>
              <div class="certificates-slider__wrapper">
                <div class="certificates-slider__item">
                  <img src="./images/nershaveika/nershaveika-slider-2.jpg" alt="img">
                </div>
              </div>
              <div class="certificates-slider__wrapper">
                <div class="certificates-slider__item">
                  <img src="./images/nershaveika/nershaveika-slider-1.jpg" alt="img">
                </div>
              </div>
              
            </div>
    
            <div class="certificates-slider__mobile">
              <div class="certificates-slider__box--mobile">
                <div class="certificates-slider__wrapper">
                  <div class="certificates-slider__item">
                    <img src="./images/nershaveika/nershaveika-slider-1.jpg" alt="img">
                  </div>
                </div>
                <div class="certificates-slider__wrapper">
                  <div class="certificates-slider__item">
                    <img src="./images/nershaveika/nershaveika-slider-2.jpg" alt="img">
                  </div>
                </div>
                <div class="certificates-slider__wrapper">
                  <div class="certificates-slider__item">
                    <img src="./images/nershaveika/nershaveika-slider-3.jpg" alt="img">
                  </div>
                </div>
                <div class="certificates-slider__wrapper">
                  <div class="certificates-slider__item">
                    <img src="./images/nershaveika/nershaveika-slider-2.jpg" alt="img">
                  </div>
                </div>
                <div class="certificates-slider__wrapper">
                  <div class="certificates-slider__item">
                    <img src="./images/nershaveika/nershaveika-slider-3.jpg" alt="img">
                  </div>
                </div>
                
              </div>
            </div>
    
            <div class="container">
              <div class="certificates-slider__arrows"></div>
            </div>
            <div class="container">
              <div class="certificates-slider__arrows--mobile"></div>
            </div>
          </section>

          <section class="customers-slider">
            <div class="container">
              <h3 class="customers-slider__title title">Наши заказчики</h3>
            </div>
            
            <div class="customers-slider__box">
              <div class="customers-slider__wrapper">
                <div class="customers-slider__item">
                  <img src="./images/home/customers-1.jpg" alt="img">
                </div>
              </div>
              <div class="customers-slider__wrapper">
                <div class="customers-slider__item">
                  <img src="./images/home/customers-2.jpg" alt="img">
                </div>
              </div>
              <div class="customers-slider__wrapper">
                <div class="customers-slider__item">
                  <img src="./images/home/customers-3.jpg" alt="img">
                </div>
              </div>
              <div class="customers-slider__wrapper">
                <div class="customers-slider__item">
                  <img src="./images/home/customers-4.jpg" alt="img">
                </div>
              </div>
              
               
              
            </div>
    
            <div class="customers-slider__mobile">
              <div class="container">
                <div class="customers-slider__box--mobile">
                  <div class="customers-slider__wrapper">
                    <div class="customers-slider__item">
                      <img src="./images/home/customers-1.jpg" alt="img">
                    </div>
                  </div>
                  <div class="customers-slider__wrapper">
                    <div class="customers-slider__item">
                      <img src="./images/home/customers-2.jpg" alt="img">
                    </div>
                  </div>
                  <div class="customers-slider__wrapper">
                    <div class="customers-slider__item">
                      <img src="./images/home/customers-3.jpg" alt="img">
                    </div>
                  </div>
                  <div class="customers-slider__wrapper">
                    <div class="customers-slider__item">
                      <img src="./images/home/customers-4.jpg" alt="img">
                    </div>
                  </div>
                </div>
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