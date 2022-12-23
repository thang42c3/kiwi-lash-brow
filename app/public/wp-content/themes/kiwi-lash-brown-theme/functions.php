<?php
function kiwi_lash_brown_files() {
    wp_enqueue_script('googleMap', '//maps.googleapis.com/maps/api/js?key=AIzaSyDin3iGCdZ7RPomFLyb2yqFERhs55dmfTI', NULL, '1.0', true);
    wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0');
    wp_enqueue_style('questrial-google-fonts', 'https://fonts.googleapis.com/css2?family=Questrial&display=swap');
    wp_enqueue_style('index', get_theme_file_uri('/css/style-index.css'));
    wp_enqueue_style('slide-show', get_theme_file_uri('/css/slide-show.css'));
    wp_enqueue_style('menu', get_theme_file_uri('/css/menu.css'));
}

add_action('wp_enqueue_scripts', 'kiwi_lash_brown_files');