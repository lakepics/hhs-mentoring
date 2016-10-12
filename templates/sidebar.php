<?php if ( is_page_template('template-front-page.php') ) {
    dynamic_sidebar('sidebar-home-page');
}
elseif ( is_page_template('template-contact-us.php') ) {
    dynamic_sidebar('sidebar-contact-us');
}
else {
    dynamic_sidebar('sidebar-primary');
}
?>
