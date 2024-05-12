<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a class="underline font-bold text-art-medium" href="%s">%s</a>', get_permalink(), __('Voir plus', 'sage'));
});

add_filter( 'excerpt_length', function () {	
    return 20;
});