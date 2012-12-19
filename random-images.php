<?php


//Random Images

$front_page_image = array('IMG_0995', 'IMG_0996', 'IMG_0997', 'IMG_0998', 'IMG_0999');
$image  = rand(0, count($front_page_image)-1);
$front_random_image = "/stylesheets/css/images/random-images/{$front_page_image[$image]}.jpg";

?>