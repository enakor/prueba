<?php if ( has_nav_menu( 'footer-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'footer-menu' ) ); ?>
<?php } ?>

<footer class="contact">
	<h4 class="p-4"><b>Me puedes encontrar en</b></h4>
    	<div class="container">
        	<a href="https://github.com/enakor/" target="_blank"><i class="fab fa-github-square fa-3x p-2"></i></a>
        	<a href="https://www.facebook.com/juan.fuentes.7773" target="_blank"><i class="fab fa-facebook-square fa-3x p-2"></i></a>
        	<a href="https://www.linkedin.com/in/juan-guillermo-fuentes-carvajal-455258197/" target="_blank"><i class="fab fa-linkedin fa-3x p-2"></i></a>
        	<a href="https://www.instagram.com/rosencrazt/?hl=es-la" target="_blank"><i class="fab fa-instagram-square fa-3x p-2"></i></a>
    	</div>
</footer>

<?php wp_footer() ?>
</body>
</html>