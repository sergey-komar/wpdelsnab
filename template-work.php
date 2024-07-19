<?php
/**
 * Template Name: Наши работы
 */
?>
<?php get_header();?>
    <main class="main">
      <section class="work">
        <div class="container">
            <div class="work-block">
                <div class="work-block__category">
                    <h1 class="work-block__category-title title">Наши работы</h1>
                    <?php
                    global $post;
                        $work = new WP_Query([
                        'post_type' => 'work',
                        'posts_per_page' => '9',
                    ])
                    ?>
                    <ul class="work-block__list">
                    <?php if($work->have_posts()) : while($work->have_posts()): $work->the_post();?>
                        <li>
                            <a  href="<?php the_permalink();?>">
                            <?php the_title();?>
                            </a>
                        </li>
                    <?php endwhile; endif;?>
                    <?php wp_reset_postdata();?> 
                    </ul>
                </div>
                <div class="work-block__wrapper">
                   
                    <div class="work-block__content">
                        <?php if(have_rows('blok_nashi_raboty_kartochka')) : while(have_rows('blok_nashi_raboty_kartochka')): the_row()?>
                        <div class="work-block__item">
                            <img src="<?php the_sub_field('blok_nashi_raboty_kartochka_kartinka');?>" alt="img" class="work-block__item-img">
                            <div class="work-block__item-title">
                            <?php the_sub_field('blok_nashi_raboty_kartochka_zagolovok');?>
                            </div>  
                        </div>
                        <?php endwhile; endif;?>
                    </div>

                   

                    <div class="work-block__hidden">
                        <?php if(have_rows('skrytyj_blok_nashi_raboty_kartochka')) : while(have_rows('skrytyj_blok_nashi_raboty_kartochka')): the_row()?>
                        <div class="work-block__item">
                        <img src="<?php the_sub_field('skrytyj_blok_nashi_raboty_kartochka_izobrazhenie');?>" alt="img" class="work-block__item-img">
                            <div class="work-block__item-title">
                            <?php the_sub_field('skrytyj_blok_nashi_raboty_kartochka_zagolovok');?>
                            </div> 
                        </div>
                        <?php endwhile; endif;?>
                    </div>
                    <a href="#" class="work__btn btn">Показать еще</a>
                </div>
               
            </div>
   
        </div>
      </section>
    </main>
<?php get_footer();?>