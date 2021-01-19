<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <!-- logo -->
        <?php if ( function_exists( 'the_custom_logo' ) ) {
            the_custom_logo();} ?>
        <!-- logo -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- navbar -->
            <?php wp_nav_menu(array(
                         'menu_class'           => 'navbar-nav me-auto mb-2 mb-lg-0 top-navigation',
                         'theme_location'       => 'top_menu',
                         )
                    ); ?>
            <!-- navbar -->
            <div class="container d-flex justify-content-md-end">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                        action="<?php echo home_url(); ?>" name="s">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
    </div>
</nav>