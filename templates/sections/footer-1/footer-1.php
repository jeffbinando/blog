<?php

$query = ffThemeOptions::getQuery('footer')->get('primary');

if( $query->get('show') ) {

	wp_enqueue_script( 'zero-footer-1-js' );

	?>
	<!--<div class="footer-1 ff-section">
		<div class="container-fluid">
			<div class="row">
				<?php
				/*$widgets = $query->get('widgets');
				$index = 0;
				foreach ($widgets as $oneWidget) {
					$index++;
					$classes = '';
					if( $oneWidget->get('xs') ) { $classes .= 'col-xs-' . absint( $oneWidget->get('xs') ) . ' '; }
					if( $oneWidget->get('sm') ) { $classes .= 'col-sm-' . absint( $oneWidget->get('sm') ) . ' '; }
					if( $oneWidget->get('md') ) { $classes .= 'col-md-' . absint( $oneWidget->get('md') ) . ' '; }
					if( $oneWidget->get('lg') ) { $classes .= 'col-lg-' . absint( $oneWidget->get('lg') ) . ' '; }

					echo '<div class="' . esc_attr( $classes ) . '">';
					dynamic_sidebar( 'footer-' . absint( $index ) );
					echo '</div>';

				}*/
				?>
			</div>
		</div>
	</div>-->
	<div id="footer_top"></div>
	<div id="footer_bottom">
		<div class="inner">
		<div id="footer_col">
			<a href="http://www.edlogics.com/" id="footer_logo" title="edlogics.com"></a>
			<div class="clear"></div>
			<div id="map_icon"></div>
			<p>1741 Corporate Landing<br> Parkway, Suite 102<br>
Virginia Beach, VA 23454</p>
			<div class="clear"></div>
		</div>
		<div id="footer_right">
			<a href="http://www.edlogics.com/" class="footer_link">Home</a>
			<a href="http://www.edlogics.com/our-mission.html" class="footer_link">Our Mission</a>
			<a href="http://www.edlogics.com/the-edlogics-platform.html" class="footer_link">The EdLogics Platform</a>
			<a href="http://www.edlogics.com/our-team.html" class="footer_link">Our Team</a>
			<a href="http://www.edlogics.com/contact.html" class="footer_link last">Contact</a>
			<div class="clear"></a>
			<p id="copyright">Copyright &copy;2017 EdLogics. All Rights Reserved</p>
		</div>
	</div>
	<?php
}
