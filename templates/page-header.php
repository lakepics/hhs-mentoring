<?php /* use Roots\Sage\Titles; */

$heroImage = get_field('heroImage');


if (!function_exists('displayHeroImage')) {
    function displayHeroImage() {
        $heroImage = get_field('heroImage');
        if ( is_array($heroImage)) { // we have multiple images so we're doing a slider
            echo '<div id="carousel-example-generic" class="carousel carousel-fade" data-ride="carousel" data-interval="3000">';
            echo '<ol class="carousel-indicators">';
            $i = 0;
            foreach ( $heroImage as $indicator ) {
                    echo '<li data-target="#carousel-example-generic" data-slide-to="' . $i . '"></li>';
                    $i++;
            }
            echo '</ol>';
            echo ' <div class="carousel-inner" role="listbox">';
            $i = 0;
            foreach ( $heroImage as $slideImage ) {
                if ( $i == 0 ) {
                    echo '<div class="item active"><img src="' . $slideImage['image'] . '" alt="' . $slideImage['caption']. '"><div class="carousel-caption">' . $slideImage['caption']. '</div></div>';
                }
                else {
                    echo '<div class="item"><img src="' . $slideImage['image'] . '" alt="' . $slideImage['caption']. '"><div class="carousel-caption">' . $slideImage['caption']. '</div></div>';
                }
                $i++;
            }
            echo '</div><a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"><span class="fa fa-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"><span class="fa fa-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a></div>';
        }
        else {
            echo '<div class="row"><div class="col-xs-12"><img src="' . the_post_thumbnail('full' , array( 'class' => 'img-responsive' ) ) . '"></div></div>';
        }
    }
}

displayHeroImage();

?>
