<?php 
/* Template Name: Home */
get_header(); ?>



<section class="services">
	<h2>Hello! I'm Verona and I make new internet.</h2>
	<?php if( have_rows('service') ): ?>
		<?php while( have_rows('service') ): the_row(); ?>
	      <div class="single_service">
				<h3><?php the_sub_field('name'); ?></h3>
				<p><?php the_sub_field('description'); ?></p>
			</div>
	   <?php endwhile; ?>
	<?php endif; ?>
</section>


<section class="websites">
	<h2>Websites</h2>
	<?php $images = get_field('portfolio_items'); if( $images ): ?>
	    <ul class="clearfix lightgallery">
	        <?php foreach( $images as $image ): ?>
	            <li class="lightgallery-default">
	                <a href="<?php echo $image['url']; ?>" rel="lightbox">
	                     <img src="<?php echo $image['sizes']['ports']; ?>" alt="<?php echo $image['alt']; ?>"  class="scale-with-grid"/>
	                </a>
	            </li>
	        <?php endforeach; ?>
	    </ul>
	<?php endif; ?>

</section>

<section class="logos">
	<h2>Logos</h2>
	<?php $images = get_field('logo_items'); if( $images ): ?>
	      <ul class="clearfix lightgallery">

	        <?php foreach( $images as $image ): ?>
	            <li class="lightgallery-default">
	                <a href="<?php echo $image['url']; ?>" rel="lightbox">
	                     <img src="<?php echo $image['sizes']['ports']; ?>" alt="<?php echo $image['alt']; ?>" />
	                </a>
	            </li>
	        <?php endforeach; ?>
	    </ul>
	<?php endif; ?>

</section>

<section class="contact">
	<h2>Get Started</h2>
	<article>
		<?php echo do_shortcode('[gravityform id="1" title="false" description="true" ajax="true"]');?>		
	</article>	
</section>


<script type="text/javascript">
    $(document).ready(function() {
     
		$('.lightgallery').lightGallery({
    			selector: 'li a ',
			download: false
		})

    });
</script>
<?php get_footer();?>