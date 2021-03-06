<?php get_header(); ?>
<header class="page-header"><a href="<?php echo home_url(); ?>">
    <h2 class="logo">Любимая ферма</h2></a>
  <h1><?php wp_title(''); ?></h1>
</header>
<section class="news-items"><?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article class="news-item">
  <h3><?php the_title(); ?></h3>
  <time><?php echo get_the_date(); ?></time>
	<?php the_content(); ?>
</article>

<?php endwhile; endif; ?>

</section>
<div class="news-navigation"><a href="<?php if( get_previous_posts_link() ) : echo get_previous_posts_page_link(); endif; ?>" class="navigation-prev">Предыдущая страница</a><a href="<?php if( get_next_posts_link() ) : echo get_next_posts_page_link(); endif; ?>" class="navigation-next">Следующая страница</a>
</div><?php get_footer(); ?>