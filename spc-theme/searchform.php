<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">

    <div class="searchHeaderBlock">
        <div class="small-8 columns">
            <input type="search" name="s" placeholder="<?php esc_html_e( 'Search', 'spc' ); ?>" class="inputSearch"
                   autofocus/>
        </div>
        <div class="small-4 columns">
            <input type="submit" value="<?php esc_html_e( 'Search', 'spc' ); ?>" class="buttonSearch">
        </div>
    </div>

</form>
