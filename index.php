<?php 

/*Template Name: Главная
*/

    get_header(); ?>
<main>
    <div class="container pd-10">
        <div class="main flex-col-rev">
            <div class="main__info">
                <h1 class="main__title"><?php echo get_the_title() ?></h1>
                <p class="main__desc">
                    <?php echo get_field( 'top_string');?> <br>
                    <?php echo get_field( 'bottom_string');?>
                </p>
                <nav class="menu">
                    <a href="<?php echo get_permalink(16) ?>" class="menu__link lang-link-portfolio"><?php echo get_field( 'label_portfolio');?></a>
                    <a href="<?php echo get_permalink(10) ?>" class="menu__link lang-link-contacts"><?php echo get_field( 'label_contacts');?></a>
                </nav>
            </div>
            <div class="main__logo">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="logo" class="main__img">
				
            </div>
        </div>
        
    </div>
</main>
<?php get_footer(); ?>