<?php /* use Roots\Sage\Titles; */

$headerImage = the_post_thumbnail('full');
$heroImage = get_field('heroImage');


if (!function_exists('displayHeroImage')) {
    function displayHeroImage() {
        $heroImage = get_field('heroImage');
        if ( is_array($heroImage)) { // we have multiple images so we're doing a slider
            echo '<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">';
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
            echo '</div><a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a></div>';
        }
        elseif ( isset($headerImage) ) { // we have at least one image set so we go jumbotron
            echo '<div class="jumbotron"><img src="' . $headerImage . '"></div>';

        }
    }
}

displayHeroImage();

?>
