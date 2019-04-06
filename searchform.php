<form role="search" method="get" id="searchform" class="exam-header__search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label class="exam-header__search-form-label">
        <input class="exam-header__search-form-text" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s"/>
        <div class="exam-header__search-form-false-submit"></div>
        <input class="exam-header__search-form-submit" type="submit" id="searchsubmit" value=""/>
    </label>
</form>
