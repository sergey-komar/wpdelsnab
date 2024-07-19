<footer class="footer">
      <div class="container">
        <div class="footer-block">
          <div class="footer-block__item">
            <a href="#" class="footer-block__item-logo">ЗМК ДЕЛСНАБ</a>
            <div class="footer-block__item-subtitle">20 лет на рынке</div>
          </div>
          <div class="footer-block__item footer-block__item--mobile">
            <a href="tel:+" class="footer-block__item-phone">+7 495 540 48 55</a>
            <p class="footer-block__item-address">Мытищи, ул.Силикатная, д.19</p>
            <a href="maito:delsnab@bk.ru" class="footer-block__item-email">delsnab@bk.ru</a>
            <a href="#" class="footer-block__item-btn">Задать вопрос</a>
          </div>
          <div class="footer-block__item">
            <?php
              wp_nav_menu([
                'theme_location' => 'menu-footer',
                'menu_class' => 'footer__list',
                'container' => ''
              ]);
            ?>
          </div>
          <div class="footer-block__item">
            <?php
              wp_nav_menu([
                'theme_location' => 'menu-category',
                'menu_class' => 'footer__list',
                'container' => ''
              ]);
            ?>
          </div>
          <div class="footer-block__item footer-block__item--hidden">
            <a href="tel:+74955404855" class="footer-block__item-phone">
            <?php the_field('telefon_v_podvale', 'options');?>
            </a>
            <p class="footer-block__item-address">
            <?php the_field('adres_v_podvale', 'options');?>
            </p>
            <a href="mailto:<?php the_field('pochta_v_podvale', 'options');?>" class="footer-block__item-email">
            <?php the_field('pochta_v_podvale', 'options');?>
            </a>
            <a href="#" class="footer-block__item-btn">Задать вопрос</a>
          </div>
        </div>
        <div class="footer__line"></div>
        <div class="footer__bottom">
          <div class="footer__bottom-text">Все права защищены.</div>
          <div class="footer__bottom-text">© Delsnab 2008-2024</div>
        </div>
      </div>
    </footer> 
  

  <?php wp_footer();?>
</body>

</html>