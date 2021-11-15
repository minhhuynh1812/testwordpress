<?php
// /**
 // * The template for displaying the footer
 // *
 // * Contains the closing of the #content div and all content after.
 // *
 // * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 // *
 // * @package Blossom_Spa
 // */
    
    // /**
     // * After Content
     // * 
     // * @hooked blossom_spa_content_end - 20
    // */
    // do_action( 'blossom_spa_before_footer' );
    
    // /**
     // * Before footer
     // * 
     // * @hooked blossom_spa_instagram - 10
    // */
    // do_action( 'blossom_spa_before_footer_start' );

    // /**
     // * Footer
     // * 
     // * @hooked blossom_spa_footer_start  - 20
     // * @hooked blossom_spa_footer_top    - 30
     // * @hooked blossom_spa_footer_bottom - 40
     // * @hooked blossom_spa_footer_end    - 50
    // */
    // do_action( 'blossom_spa_footer' );
    
    // /**
     // * After Footer
     // * 
     // * @hooked blossom_spa_page_end    - 20
    // */
    // do_action( 'blossom_spa_after_footer' );

    // wp_footer(); ?>
	<footer>
		<div class="container">
		  <div class="row">
			<div class="col-sm-8">
			  <div class="footer-menu icon-logo-adm">
				<ul class="list-unstyled">
				  <li><a href="#">About</a></li>
				  <li><a href="#">Catalog</a></li>
				  <li><a href="#">Place Your Order</a></li>
				  <li><a href="#">Get in Touch</a></li>
				  <li><a href="#">Hiring</a></li>
				</ul>
			  </div>
			</div>
			<div class="col-sm-4">
			  <div class="adrress-phone">
				<strong>Alexander DM </strong>
				<address class="address">1111 Story Road, Suite 1063
				  <br> San Jose, CA 95122
				</address>
				<p class="phone"><a href="tel:+14089984539">1-408-998-4539</a>
				  <br> sales@alexanderjewelry.com</p>
			  </div>
			</div>
		  </div>
		</div>
		<div class="copy-right">
		  <div class="container">
			<p>&copy; 2016 Alexander Jewelry. All Rights Reserved.</p>
		  </div>
		</div>
  </footer>
	 <script src="http://localhost:8010/adm/wp-content/themes/blossom-spa/js/jquery-1.12.2.min.js"></script>
  <!-- Bootstrap JavaScript -->
	
	<script>
		$("footer[class='entry-footer']").remove();
		var htmlappend = '<section class="home-block bg ordering-porcess">'+
							  '<div class="container">'+
								'<div class="row">'+
								  '<div class="col-lg-7 col-lg-offset-5 col-sm-9 col-sm-offset-3">'+
									'<div class="mr">'+
									  '<h1 class="hb-title">100% Satisfaction <br>Guaranteed <br>or You Don’t Pay</h1>'+
									  '<a href="#" class="btn btn-lgl btn-outline-white">ORDERING PROCESS</a>'+
									'</div>'+
								  '</div>'+
								'</div>'+
							  '</div>'+
							'</section>';
							
							
		$("#banner_section").append(htmlappend);
		$("#banner_section").append('<section id="map" class="map">'+
									  '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3596.395674652821!2d-74.00733818652567!3d40.71369649975358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2zVGjDoG5oIHBo4buRIE5ldyBZb3JrLCBUaeG7g3UgYmFuZyBOZXcgWW9yaywgSG9hIEvhu7M!5e0!3m2!1svi!2s!4v1458742577812" width="100%" height="550" scrollwheel="false" frameborder="0" style="border:0" allowfullscreen></iframe>'+
									'</section>');
	</script>
	
	<script src="http://localhost:8010/adm/wp-content/themes/blossom-spa/js/bootstrap.min.js"></script>
	<script src="http://localhost:8010/adm/wp-content/themes/blossom-spa/plugins/slick-1.5.9/slick/slick.min.js"></script>
</body>
</html>
