<?php
/**
 * Template Name: Classes Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php
    get_template_part('templates/content', 'page');
    echo '<div class="row">';
    $participants = get_field('participants');
    if ( $participants ) {
        foreach ( $participants as $pair ) {
            echo '<div class="col-sm-4"><p class="mentee">' . $pair['mentee_name'] . '</p><p class="mentor"><span>Mentor:</span> ' . $pair['mentor_name'] . '</p></div>';
        }
    }
    echo '</div>';
    $next_class = get_field('next_class');
    $prev_class = get_field('previous_class');
    if ( $next_class ) {
        echo '<div class="row"><div class="col-sm-6 next-class"><a href="' . $next_class . '">&laquo; Next Class</a></div><div class="col-md-6 previous-class"><a href="' . $prev_class . '">Previous Class &raquo;</a></div></div>';
        }
    else {
        echo '<div class="row"><div class="col-sm-6 next-class"></div><div class="col-md-6 previous-class"><a href="' . $prev_class . '">Previous Class &raquo;</a></div></div>';
    }
?>

<?php endwhile; ?>
