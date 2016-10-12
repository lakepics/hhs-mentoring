<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      /* do_action('get_header'); */
      get_template_part('templates/header');
    ?>
    <?php if (Setup\display_sidebar()) : ?>
    <div class="wrap container" role="document">
     <?php get_template_part('templates/page-header'); ?>
      <div class="content row">
        <main class="col-md-8">
          <?php get_template_part('templates/page', 'title');
            include Wrapper\template_path(); ?>
        </main><!-- /.main -->
          <aside class="col-md-4">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php elseif (!(Setup\display_sidebar())) : ?>
    <div class="wrap container" role="document">
     <?php get_template_part('templates/page-header'); ?>
      <div class="content row">
        <main class="col-md-12">
          <?php get_template_part('templates/page', 'title');
            include Wrapper\template_path(); ?>
        </main><!-- /.main -->
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php endif; ?>
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
