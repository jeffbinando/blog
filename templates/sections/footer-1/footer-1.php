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
				<a href="#" id="footer_logo" title="edlogics"></a>
				<div class="clear"></div>
				<a href="#" id="map_icon"></a>
				<p>214A 63rd Street <br> Virginia Beach, VA 23451</p>
			</div>
		<div id="footer_right">
			<a href="#" class="footer_link">Home</a> |
			<a href="#" class="footer_link">Our Mission</a> |
			<a href="#" class="footer_link">Edlogics Solution</a> |
			<a href="#" class="footer_link">About</a> |
			<a href="#" class="footer_link">Blog</a> |
			<a href="#" class="footer_link">Contact</a>
			<div class="clear"></a>
			<p id="copyright">Copyright &copy2017 Edlogics. All Rights Reserved</p>
		</div>
	</div>
	<?php
}
