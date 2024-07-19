<?php get_header()?>
<main class="main">
    <section class="work-page">
    <div class="container">
        <h1 class="work-page__title title"><?php the_title()?></h1>
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
                        <a class="" href="<?php the_permalink();?>">
                        <?php the_title();?>
                        </a>
                    </li>
                <?php endwhile; endif;?>
                <?php wp_reset_postdata();?> 
                </ul>
            </div>
            <div class="work-block__wrapper work-block__wrapper--page">
                
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
                    
                </div>
                <a href="#" class="work__btn btn">Показать еще</a>
            </div>
               
        </div>  
    </div>
    </section>
    
</main>
<?php get_footer();?>