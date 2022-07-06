<?php 

/*Template Name: Portfolio*/

    get_header(); ?>

<section class="navigation">
		<div class="container mt-0">
			<nav class="menu-top">
				<a href="<?php echo get_permalink(2) ?>" class="menu-top__link lang-link-home"><?php echo get_field( 'label_main', 2);?></a>
				<a href="<?php echo get_permalink(10) ?>" class="menu-top__link lang-link-contacts"><?php echo get_field( 'label_contacts', 2);?></a>
			</nav>
		</div>
	</section>
	<section class="portfolio">
		<div class="container">
			<div class="logo">
				<img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="" class="logo__img">
			</div>
			<div class="vk">
				<a href="https://vk.com/dara.sparrow" target="blank" class="vk__link">
					<img src="<?php bloginfo('template_url'); ?>/assets/img/vk.svg" class="vk__ico" alt=""> VKontakte</a>
			</div>
			<div class="gallery">

			<?php
			if (have_rows('pic_and_title')) { // если найдены данные 
				while (have_rows('pic_and_title')) {
					the_row(); ?>
                
				<div class="gallery__item" title="click me">

				<a data-fancybox="responsive" data-src="<?php the_sub_field('picture'); ?>" data-caption="<?php the_sub_field('title_pic'); ?>">
                            <img src="<?php the_sub_field('picture'); ?>" alt="Работа Dara Sparrow" class="gallery__img" alt="" width="100%" height="100%"/>
                        </a>

					
					<p class="gallery__desc"><?php the_sub_field('title_pic'); ?></p>
				</div>
                <?php	}
			} else {
				// строки не найдены 
			}
			?>

				</div>
			</div>
		</div>
	</section>

    <?php get_footer(); ?>