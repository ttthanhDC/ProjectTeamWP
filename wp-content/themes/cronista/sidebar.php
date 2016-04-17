
<div id="sidebar1"  class="col-xs-12 col-md-4">

	<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar' ); ?>

	<?php else : ?>

						
	<div class="bg-danger">
		<p><?php _e("Por favor activa algunos Widgets.", "cronista");  ?></p>
	</div>

	<?php endif; ?>
					
</div>