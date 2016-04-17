
<form class="navbar-form navbar-left search-form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="form-group">
		<input type="text" class="form-control" placeholder="<?php  esc_attr_e('Buscar...', 'cronista');?>"  value="<?php echo esc_attr(get_search_query()); ?>" name="s"  >
		
	</div>
	<button type="submit" class="btn btn-default"><?php _e('Buscar', 'cronista');?></button>
</form>