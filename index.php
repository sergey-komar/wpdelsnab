<?php
/**
 * Template Name: Главная
 */
?>
<?php get_header();?>

    <main class="main">
      <div class="heading">
        <div class="container">
          <div class="heading-wrapper">
            <div class="heading-block">
              <div class="heading-block__left">
                <p class="heading-block__left-subtitle">завод металлоконструкций</p>
                <h1 class="heading-block__left-title">ДЕЛСНАБ</h1>
                <p class="heading-block__left-text">20 лет на рынке</p>
                <p class="heading-block__right-text heading-block__right-text--mobile">
                  Мы производим металлические конструкции типовых серий, выполняем заказы по индивидуальным проектам. Производство – от разработки чертежа до монтажа проходит максимально быстро и с гарантией качества. Возможно изготовление как единичных изделий, так и серийный выпуск требуемой продукции.
                </p>
                <div class="heading-block__bottom">
                  <a href="#" class="heading-block__bottom-btn btn">Рассчитать</a>
                  <a href="#" class="heading-block__bottom-button">Заказать звонок</a>
                </div>
              </div>
  
              <div class="heading-block__right">
                <p class="heading-block__right-text">
                  Мы производим металлические конструкции типовых серий, выполняем заказы по индивидуальным проектам. Производство – от разработки чертежа до монтажа проходит максимально быстро и с гарантией качества. Возможно изготовление как единичных изделий, так и серийный выпуск требуемой продукции.
                </p>
              </div>
            </div>
          </div>
         
        </div>
      </div>

      <section class="advantages">
        <div class="container">
          <div class="advantages-block">
            <h3 class="advantages-block__title title">преимущества</h3>
            <div class="advantages-wrapper">
              <div class="advantages-box">
                <div class="advantages-box__item">
                  <div class="advantages-box__item-title">Работаем с 2008 года</div>
                </div>
                <div class="advantages-box__item">
                  <div class="advantages-box__item-title">Производство в Москве</div>
                </div>
                <div class="advantages-box__item">
                  <div class="advantages-box__item-title">Свое проектное бюро</div>
                </div>
                <div class="advantages-box__item">
                  <div class="advantages-box__item-title">работаем с 1 дня договора</div>
                </div>
                <div class="advantages-box__item">
                  <div class="advantages-box__item-title">Отличная репутация</div>
                </div>
                <div class="advantages-box__item">
                  <div class="advantages-box__item-title">Оперативный отклик</div>
                </div>
              </div>
  
              <a href="#" class="advantages-box__item-btn btn">Рассчитать</a>
            </div>
           
          </div>
        </div>
      </section>

      <section class="manufacturer-slider">
        <div class="container">
          <div class="manufacturer-slider__top">
            <h3 class="manufacturer-slider__top-title title">Прямые поставки металла от производителя</h3>
            <div class="manufacturer-slider__top-text">
              Прямые поставки позволяют нам устанавливать максимально доступные цены на всю продукцию. Металлопрокат мы продаем от одного метра до вагонных норм, в случае крупных оптовых заказов цена будет еще более выгодной.
            </div>
          </div>
        </div>
          
        
        <div class="manufacturer-slider__box">
          <?php if(have_rows('slajder_postavki_kartochka')) : while(have_rows('slajder_postavki_kartochka')): the_row()?>
          <div class="manufacturer-slider__wrapper">
            <div class="manufacturer-slider__item">
              <img src="<?php the_sub_field('slajder_postavki_kartochka_kartinka');?>" class="manufacturer-slider__box-img">
              <div class="manufacturer-slider__box-title">
              <?php the_sub_field('slajder_postavki_kartochka_zagolovok');?>
              </div>
              <ul class="manufacturer-slider__list">
                <?php if(have_rows('slajder_postavki_kartochka_spisok')) : while(have_rows('slajder_postavki_kartochka_spisok')): the_row()?>
                <li class="manufacturer-slider__list-item">
                <?php the_sub_field('slajder_postavki_kartochka_spisok_tekst');?>
                </li>
                <?php endwhile; endif;?>
              </ul>
              <a href="<?php the_sub_field('slajder_postavki_kartochka_ssylka');?>" class="manufacturer-slider__box-btn btn">Подробнее</a>
            </div>
          </div>
         <?php endwhile; endif;?>
        </div>

        <div class="manufacturer-slider__mobile">
          <div class="manufacturer-slider__box--mobile">
            <?php if(have_rows('slajder_postavki_kartochka')) : while(have_rows('slajder_postavki_kartochka')): the_row()?>
              <div class="manufacturer-slider__wrapper">
                <div class="manufacturer-slider__item">
                  <img src="<?php the_sub_field('slajder_postavki_kartochka_kartinka');?>" class="manufacturer-slider__box-img" alt="img">
                  <div class="manufacturer-slider__box-title">
                  <?php the_sub_field('slajder_postavki_kartochka_zagolovok');?>
                  </div>
                  <ul class="manufacturer-slider__list">
                    <?php if(have_rows('slajder_postavki_kartochka_spisok')) : while(have_rows('slajder_postavki_kartochka_spisok')): the_row()?>
                    <li class="manufacturer-slider__list-item">
                    <?php the_sub_field('slajder_postavki_kartochka_spisok_tekst');?>
                    </li>
                    <?php endwhile; endif;?>
                  </ul>
                  <a href="<?php the_sub_field('slajder_postavki_kartochka_ssylka');?>" class="manufacturer-slider__box-btn btn">Подробнее</a>
                </div>
              </div>
            <?php endwhile; endif;?>
          </div>
        </div>

        <div class="container">
          <div class="manufacturer-slider__arrows"></div>
        </div>
        <div class="container">
          <div class="manufacturer-slider__arrows--mobile"></div>
        </div>
      </section>
 
      <section class="are">
        <div class="container">
          <div class="are-block">
            <h3 class="are-block__title title">Если вы являетесь:</h3>
            <div class="are-wrapper">
              <div class="are-box">
                <div class="are-box__item">
                  <div class="are-box__item-number">01</div>
                  <div class="are-box__item-text">Государственным учреждением</div>
                </div>
                <div class="are-box__item">
                  <div class="are-box__item-number">02</div>
                  <div class="are-box__item-text">Организатором тендера</div>
                </div>
                <div class="are-box__item">
                  <div class="are-box__item-number">03</div>
                  <div class="are-box__item-text">Промышленным предприятием</div>
                </div>
                <div class="are-box__item">
                  <div class="are-box__item-number">04</div>
                  <div class="are-box__item-text">Строительной организацией</div>
                </div>
                <div class="are-box__item">
                  <div class="are-box__item-number">05</div>
                  <div class="are-box__item-text">Производственной компанией</div>
                </div>
              </div>
              <div class="are-wrapper__form">
                <div class="are-wrapper__form-title">
                  В таком случае мы можем предложить для вас более выгодные условия сотрудничества.
                </div>
                <div class="are-wrapper__info">
                 
                  <div class="are-wrapper__desc">
                    <input type="text" class="are-wrapper__form-input" placeholder="Имя">
                    <input type="text" class="are-wrapper__form-input" placeholder="Email">
                    <input type="text" class="are-wrapper__form-input" placeholder="Сообщение">
                    <div class="are-wrapper__text">
                      <input type="checkbox" class="are-wrapper__form-checkbox">
                      <p>Я даю согласие на обработку своих персональных данных</p>
                    </div>
                   <button class="are-wrapper__form-btn btn">Получить КП</button>
                  </div>
                 <img src="<?php echo get_template_directory_uri()?>/assets/images/home/form-bg.jpg" alt="img" class="are-wrapper__info-img">
                </div>
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

      <section class="portfolio-slider">
        <div class="container">
          <h3 class="portfolio-slider__title title">Портфолио</h3>
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


      <section class="about-home">
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

 
      <section class="certificates-slider">
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

      <section class="accardion">
        <div class="container">
          <div class="accardion-block">
            <h3 class="accardion-block__title title">Новости</h3>
            <?php
            global $post;
            $news = new WP_Query([
                        'post_type' => 'news',
                        'posts_per_page' => '',
            ])
            ?>
            <div class="questions-accardion">
              <?php if($news->have_posts('news')) : while($news->have_posts('news')): $news->the_post();?>
              <div class="questions__wrapper">
                <div class="questions-accardion__btn">
                  <span class="questions-accardion__title title">
                   <?php the_title();?>
                  </span>
                  <span class="questions-accardion__date">
                    <?php echo get_the_date();?>
                  </span>
                </div>
                <div class="questions-accardion__content">
                  <div class="questions-accardion__info">
                    <div class="questions-accardion__left">
                      <img src="<?php the_post_thumbnail_url()?>" alt="img" class="questions-accardion__left-img">
                      <a href="<?php //the_permalink();?>" class="questions-accardion__left-link">Полная статья</a>
                    </div>
                    <div class="questions-accardion__right">
                      <p>
                        <?php the_excerpt();?>
                      </p>
                     
                    </div>
                   
                  </div>
                </div>
              </div>
              <?php endwhile; endif;?>
            </div>
          </div>
        </div>
      </section>

      <section class="stages">
        <div class="container">
          <div class="stages-block">
            <h3 class="stages-block__title title">Этапы работы</h3>
            <div class="stages-box">
              <div class="stages-box__item">
                <div class="stages-box__item-number">01</div>
                <div class="stages-box__item-img">
                  <img src="<?php echo get_template_directory_uri();?>/assets/images/home/crug.svg" alt="img">
                </div>
               
                <div class="stages-box__item-title">ОБРАЩЕНИЕ КЛИЕНТА</div>
                <div class="stages-box__item-text">
                  Вы совершаете звонок или высылаете заявку в нашу компанию
                </div>
              </div>
              <div class="stages-box__item">
                <div class="stages-box__item-number">02</div>
                <div class="stages-box__item-img">
                  <img src="<?php echo get_template_directory_uri();?>/assets/images/home/crug.svg" alt="img">
                </div>
                <div class="stages-box__item-title">наша консультация</div>
                <div class="stages-box__item-text">
                  Помощь нашего специалиста в подборе оптимального решения
                </div>
              </div>
              <div class="stages-box__item">
                <div class="stages-box__item-number">03</div>
                <div class="stages-box__item-img">
                  <img src="<?php echo get_template_directory_uri();?>/assets/images/home/crug.svg" alt="img">
                </div>
                <div class="stages-box__item-title">КОММЕРЧЕСКОЕ ПРЕДЛОЖЕНИЕ</div>
                <div class="stages-box__item-text">
                  Менеджер согласовывает ТЗ, сроки, стоимость и выставляет счет.
                </div>
              </div>
              <div class="stages-box__item">
                <div class="stages-box__item-number">04</div>
                <div class="stages-box__item-img">
                  <img src="<?php echo get_template_directory_uri();?>/assets/images/home/crug.svg" alt="img">
                </div>
                <div class="stages-box__item-title">ЗАПУСК В РАБОТУ</div>
                <div class="stages-box__item-text">
                  При необходимости контрольные замеры и адаптация макетов.
                  Выполнение проекта согласно согласованному ТЗ в оговоренные сроки.
                </div>
              </div>
              <div class="stages-box__item">
                <div class="stages-box__item-number">05</div>
                <div class="stages-box__item-img">
                  <img src="<?php echo get_template_directory_uri();?>/assets/images/home/crug.svg" alt="img">
                </div>
                <div class="stages-box__item-title">ЗАКРЫТИЕ ПРОЕКТА</div>
                <div class="stages-box__item-text">
                  Приемка работ и подписание закрывающих документов
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="feedback">
        <div class="container">
          <div class="feedback-block">
            <div class="feedback-block__left">
              <h3 class="feedback-block__lefr-title title">Обратная связь</h3>
              <p class="feedback-block__left-text">Пн-пт с 9:00 до 18:00</p>
            </div>

            <div class="feedback-block__right">
              <div class="feedback-block__contact">
                <a href="tel:+74955404855" class="feedback-block__item">
                  <div class="feedback-block__item-img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/home/home-phone-icon.svg" alt="img">
                   
                  </div>
                  <p>+7 495 540 48 55</p>
                </a>
                <div class="feedback-block__item">
                  <div class="feedback-block__item-img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/home/home-address-icon.svg" alt="img">
                  </div>
                  
                  <p>г. Москва, ул. Вешних Вод, 4с79</p>
                </div>
                <a href="maito:Delsnab@bk.ru" class="feedback-block__item">
                  <div class="feedback-block__item-img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/home/home-email-icon.svg" alt="img">
                  </div>
                  
                  <p>Delsnab@bk.ru</p>
                </a>
              </div>
              <div class="feedback-block__right-map">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A7362448c6f4998895cae4f36bc67707850e804b93ec3b6a45340a6aaba12092d&amp;source=constructor" width="900" height="460" frameborder="0"></iframe>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="manufacturing">
        <div class="container">
          <div class="manufacturing-block">
            <h3 class="manufacturing-block__title title">
              Производственная компания ООО «Делснаб» занимается изготовлением:
            </h3>
            <div class="manufacturing-box">
              <div class="manufacturing-box__item">
                <div class="manufacturing-box__item-number">01</div>
                <div class="manufacturing-box__item-text">
                  Металлических лестниц – технических, промышленных, мансардных, профильных, на тетивах и косоурах, забежных. А также каркасов и площадок обслуживания.
                </div>
              </div>
              <div class="manufacturing-box__item">
                <div class="manufacturing-box__item-number">02</div>
                <div class="manufacturing-box__item-text">
                  Пожарных лестниц – вертикальных, эвакуационных, приставных. Материал производства – черный металл с оцинкованием или покраской.
                </div>
              </div>
              <div class="manufacturing-box__item">
                <div class="manufacturing-box__item-number">03</div>
                <div class="manufacturing-box__item-text">
                  Металлических ферм для перекрытий промышленных зданий большой площади.
                </div>
              </div>
              <div class="manufacturing-box__item">
                <div class="manufacturing-box__item-number">04</div>
                <div class="manufacturing-box__item-text">
                  Закладных деталей для строительства сборных и монолитных конструкций.
                </div>
              </div>
              <div class="manufacturing-box__item">
                <div class="manufacturing-box__item-number">05</div>
                <div class="manufacturing-box__item-text">
                  Ограждений – из черного металла под покраску, с полированной поверхностью, с ригелями, заполнением вертикальной части.
                </div>
              </div>
              <div class="manufacturing-box__item">
                <div class="manufacturing-box__item-number">06</div>
                <div class="manufacturing-box__item-text">
                  Металлоизделий – козырьки, ворота, рекламные конструкции.
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="principles">
        <div class="container">
          <div class="principles-block">
            <h3 class="principles-block__title title">
              Московский завод металлоконструкций «Делснаб» работает по следующим принципам:
            </h3>
            <div class="principles-box">
              <div class="principles-box__wrapper">
                <div class="principles-box__item">
                  <p class="principles-box__item-text">
                    Выполнение заказов любого объема и сложности, включая нестандартные инженерные решения
                  </p>
                </div>
                <div class="principles-box__item">
                  <p class="principles-box__item-text">
                    Использование сертифицированного металлопроката
                  </p>
                </div>
                 
                  <div class="principles-box__item">
                    <p class="principles-box__item-text">
                      Строгое соблюдение стандартов РФ и технических регламентов
                    </p>
                  </div>
                   
              </div>
              <div class="principles-block__item">
                <p class="principles-block__item-text">
                  Комплексный подход для полного удовлетворения запросов компаний – от проектирования до производства и монтажа
                </p>
                <div class="principles-block__item-info">
                  *На сайте ЗМК «Делснаб» можно посмотреть наши работы и рассчитать стоимость заказа.
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php get_footer();?>