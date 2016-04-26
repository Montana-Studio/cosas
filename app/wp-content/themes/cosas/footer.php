<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cosas
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
        
        <div class="newsletter">
            
            <h3 class="titus">suscribete a nuestro newsletter</h3>
            <form action="">
                
                <input type="text" name="nombre">
                <input type="text" name="mail">
                <input type="submite" name="enviar" value="suscribete">
                
            </form>
            
        </div>
        <ul class="redes">
            
            <li class="logo-cosas">
                
                <svg x="0px" y="0px" viewBox="0 0 196.32 64.49">
                    <use xlink:href="#logo-cosas" class="footer-red"/>
                </svg>
                
            </li>
            <li><a href=""><i class="fa fa-facebook"></i></a></li>
            <li><a href=""><i class="fa fa-twitter"></i></a></li>
            <li><a href=""><i class="fa fa-instagram"></i></a></li>
            <li><a href=""><i class="fa fa-youtube"></i></a></li>
            
        </ul>
        <ul class="network">
            <li>
                <svg x="0px" y="0px" viewBox="0 0 196.32 64.49">
                    <use xlink:href="#logo-cosas" class="footer-network"/>
                </svg>
            </li>
        </ul>
        
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
