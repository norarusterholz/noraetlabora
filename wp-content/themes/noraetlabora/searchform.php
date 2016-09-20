<form role="search" method="get" class="b-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <label>
    <input type="search" class="b-search-field" placeholder="<?php echo esc_attr_x( 'What are you looking for?' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
  </label>
</form>
