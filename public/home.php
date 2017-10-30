<?php get_header(); ?>
<header class="news-header"><a href="<?php echo home_url(); ?>">
    <h1 class="logo">Любимая ферма</h1></a>
  <h2>Наша жизнь</h2>
</header>
<section class="news-items"><?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article class="news-item">
  <h3><?php the_title(); ?></h3>
  <time><?php echo get_the_date(); ?></time>
	<?php the_content(); ?>
</article>

<?php endwhile; endif; ?>

</section>
<div class="news-navigation"><?php posts_nav_link(' ', 'Предыдущая страница', 'Следующая страница'); ?></div><?php get_footer(); ?>