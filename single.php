<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
	<section>
<h2><?php the_title();?></h2>
<?php the_content(); ?>
</section>
	<?php endwhile; endif; ?>

<?php get_footer();?>
