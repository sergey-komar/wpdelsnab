<?php
/**
 * Template Name: О нас
 */
?>
<?php get_header();?>
    <main class="main">
        <section class="about">
            <div class="container">
                <div class="about-block">
                    <h1 class="about-block__title title">О компании ДЕЛСНАб</h1>
                    <div class="about-content">
                        <p class="about-content__text">
                            Карточка предприятия<br>
                            Общество с ограниченной ответственностью «ДЕЛСНАБ»
                        </p>
                        <div class="about-content__wrapper">
                            <div class="about-content__requisites">
                                <div class="about-content__item">
                                    <p class="about-content__item-text">Краткое наименование</p>
                                    <p class="about-content__item-text">
                                      <?php the_field('kratkoe_naimenovanie');?>
                                    </p>
                                </div>
                            </div>
                            <div class="about-content__requisites">
                                <div class="about-content__item">
                                    <p class="about-content__item-text">
                                        Основной государственный регистрационный номер
                                    </p>
                                    <p class="about-content__item-text">
                                    <?php the_field('osnovnoj_gosudarstvennyj_registraczionnyj_nomer');?>
                                    </p>
                                </div>
                            </div>
                            <div class="about-content__requisites">
                                <div class="about-content__item">
                                    <p class="about-content__item-text">ИНН</p>
                                    <p class="about-content__item-text">
                                    <?php the_field('inn');?>
                                    </p>
                                </div>
                            </div>
                            <div class="about-content__requisites">
                                <div class="about-content__item">
                                    <p class="about-content__item-text">КПП</p>
                                    <p class="about-content__item-text">
                                    <?php the_field('kpp');?>
                                    </p>
                                </div>
                            </div>
                            <div class="about-content__requisites">
                                <div class="about-content__item">
                                    <p class="about-content__item-text">ОКВЭД</p>
                                    <p class="about-content__item-text">
                                    <?php the_field('okved');?>
                                    </p>
                                </div>
                            </div>
                            <div class="about-content__requisites">
                                <div class="about-content__item">
                                    <p class="about-content__item-text">ОКПО</p>
                                    <p class="about-content__item-text">
                                    <?php the_field('okpo');?>
                                    </p>
                                </div>
                            </div>
                            <div class="about-content__requisites">
                                <div class="about-content__item">
                                    <p class="about-content__item-text">
                                        Адрес местонахождения в соответствии с учредительными документами
                                    </p>
                                    <p class="about-content__item-text">
                                    <?php the_field('adres_mestonahozhdeniya_v_sootvetstvii_s_uchreditelnymi_dokumentami');?>
                                    </p>
                                </div>
                            </div>
                            <div class="about-content__requisites">
                                <div class="about-content__item">
                                    <p class="about-content__item-text">Фактический адрес</p>
                                    <p class="about-content__item-text">
                                    <?php the_field('fakticheskij_adres');?>
                                    </p>
                                </div>
                            </div>
                            <div class="about-content__requisites">
                                <div class="about-content__item">
                                    <p class="about-content__item-text">Расчетный счет</p>
                                    <p class="about-content__item-text">
                                    <?php the_field('raschetnyj_schet');?>
                                    </p>
                                </div>
                            </div>
                            <div class="about-content__requisites">
                                <div class="about-content__item">
                                    <p class="about-content__item-text">Корреспондентский счет</p>
                                    <p class="about-content__item-text">
                                    <?php the_field('bik');?>
                                    </p>
                                </div>
                            </div>
                            <div class="about-content__requisites">
                                <div class="about-content__item">
                                    <p class="about-content__item-text">БИК</p>
                                    <p class="about-content__item-text">
                                    <?php the_field('telefony');?>
                                    </p>
                                </div>
                            </div>
                            <div class="about-content__requisites">
                                <div class="about-content__item">
                                    <p class="about-content__item-text">Телефоны</p>
                                    <p class="about-content__item-text">
                                    <?php the_field('telefony');?>
                                    </p>
                                </div>
                            </div>
                            <div class="about-content__requisites">
                                <div class="about-content__item">
                                    <p class="about-content__item-text">WWW</p>
                                    <p class="about-content__item-text">
                                    <?php the_field('www');?>
                                    </p>
                                </div>
                            </div>
                            <div class="about-content__requisites">
                                <div class="about-content__item">
                                    <p class="about-content__item-text">E-mail</p>
                                    <p class="about-content__item-text">
                                    <?php the_field('e-mail');?>
                                      </p>
                                </div>
                            </div>
                            <div class="about-content__requisites">
                                <div class="about-content__item">
                                    <p class="about-content__item-text">ФИО генерального директора</p>
                                    <p class="about-content__item-text">
                                    <?php the_field('fio_generalnogo_direktora');?>
                                    </p>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </section>
 
        <section class="are are--about">
            <div class="container">
              <div class="are-block">
                <h3 class="are-block__title title">Заказать обратный звонок</h3>
                <div class="are-wrapper">
                    <div class="are-box--about">
                        <div class="are-wrapper__form">
                            <div class="are-wrapper__form-title">
                                Оставьте Ваш номер и наш специалист свяжется с Вами в ближайшее время
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