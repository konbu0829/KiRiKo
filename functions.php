<?php
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
// add_theme_support( 'automatic-feed-links' );

/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */
add_theme_support( 'html5', [
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
]);

register_sidebar();
