<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset>
		<label>
			<input type="search" class="search-field" placeholder="SEARCH ..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
		
			<a class="search-enter" href="<?php echo esc_html( '' ); ?>"><span><i class="fa fa-search" aria-hidden="true"></i></span></a>
	</fieldset>
</form>
