<?php
/**
 * Template Name: Вакансии
 */
?>
<?php get_header();?>
<main class="main">

<section class="vacancies">
    <div class="container">
        <div class="vacancies-block">
             <h1 class="vacancies-block__title title">Вакансии</h1>
            <?php
            global $post;
                $vacancies = new WP_Query([
                'post_type' => 'vacancies',
                'posts_per_page' => '6',
            ])
            ?>
            <div class="vacancies-block__content">
            <?php if($vacancies->have_posts()) : while($vacancies->have_posts()): $vacancies->the_post();?>
                <a href="<?php //the_permalink();?>" class="vacancies-block__item">
                    <img src="<?php the_post_thumbnail_url()?>" alt="img" class="vacancies-block__item-img">
                    <div class="vacancies-block__item-text">
                        <?php the_title();?>
                    </div>
                </a>
                <?php endwhile; endif;?> 
            </div>
        </div>
    </div>
</section>

<section class="vacancies vacancies--mobile">
  
      <div class="vacancies-block">
          <h1 class="vacancies-block__title title">Вакансии</h1>
          <div class="vacancies-block__content">
              <div class="vacancies-block__item">
                  <img src="./images/vacancies/vacancies-img-1.jpg" alt="img" class="vacancies-block__item-img">
                  <div class="vacancies-block__item-text">инженер-проектировщик</div>
              </div>
              <div class="vacancies-block__item">
                  <img src="./images/vacancies/vacancies-img-2.jpg" alt="img" class="vacancies-block__item-img">
                  <div class="vacancies-block__item-text">Сварщик</div>
              </div>
              <div class="vacancies-block__item">
                  <img src="./images/vacancies/vacancies-img-1.jpg" alt="img" class="vacancies-block__item-img">
                  <div class="vacancies-block__item-text">Конструктор</div>
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

</main>
<?php get_footer();?>