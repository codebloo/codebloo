</main>
<footer>
	<div class="copyright">&copy;<? echo date('Y');?> <?php bloginfo('name'); ?> ALL RIGHTS RESERVED. <br/><?php bloginfo('description'); ?></div>
	
<?php wp_nav_menu(array('theme_location' => 'footer-menu', 'menu-class' => 'footer_menu nav', 'link_before' => '<span>', 'link_after' => '</span>', 'container_class' => 'footer_nav')); ?>
	
</footer>