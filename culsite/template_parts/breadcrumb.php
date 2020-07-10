<?php if ( function_exists( 'bcn_display' ) && ( !is_home() && !is_front_page() ) ) : ?>
<div class="breadcrumbs">
	<div class="content-width">
		<?php bcn_display(); ?>
	</div>
</div>
<?php endif; ?>