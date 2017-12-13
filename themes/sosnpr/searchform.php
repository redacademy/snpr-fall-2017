<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<!-- <fieldset> -->
		<label><a href="#">
			<input type="search" class="search-field" placeholder="Search ..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" style="padding-left:20px"/><i class="fa fa-times search-closing-icon" aria-hidden="true"  
			></i></a>
		</label>
		<button class="search-submit">
			<span class="icon-search" aria-hidden="true">
				<i class="fa fa-search"></i>
			</span>
			
			<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
		</button>
	<!-- </fieldset> -->
</form>
