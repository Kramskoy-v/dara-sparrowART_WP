<?php 

/*Template Name: Contacts*/

    get_header(); ?>
	<section class="navigation">
		<div class="container mt-0">
			<nav class="menu-top">
				<a href="<?php echo get_permalink(2) ?>" class="menu-top__link lang-link-home"><?php echo get_field( 'label_main', 2);?></a>
				<a href="<?php echo get_permalink(16) ?>" class="menu-top__link lang-link-portfolio"><?php echo get_field( 'label_portfolio', 2);?></a>
					</nav>
		</div>
	</section>
	<div class="container">
		<div class="logo">
			<img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="" class="logo__img">
		</div>
		<div class="contacts">
			<ul class="contacts__list">
				<li class="contacts__item lang-connection">Свяжитесь со мной:</li>
				<li class="contacts__item">VK:
					<a href="<?php echo get_field('vk_link');?>" class="contacts__link"
						target="blank"><?php echo get_field('vk_visual');?></a>
				</li>
				<li class="contacts__item">e-mail:
					<a href="mailto:<?php echo get_field('e-mail_link');?>" class="contacts__link"><?php echo get_field('e-mail_link');?></a>
				</li>
			</ul>
		</div>
		<div class="feed-form">
			<p class="feed-form__row lang-form">или заполните форму ниже:</p>
			
			<?php echo do_shortcode('[contact-form-7 id="12" title="Контактная форма"]')?>
			</div>
		</div>
	<div class="container policy">
	<a href="<?php echo get_permalink(3) ?>" class="checkbox__link lang-terms" target="blank">Политика конфиденциальности</a>
	</div>
	</div>
	<?php get_footer(); ?>