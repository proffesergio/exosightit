<?php 

function exo_bootstrapping() {
    add_theme_support('editor-styles');
    add_editor_style(
        'https://fonts.googleapis.com/css2?family=Pacifico&family=Rubik:wght@300;400;500;700&display=swap',
        'assets/bootstrap-icons/bootstrap-icons.css',
        'assets/public/index.css',
        'assets/editor.css'
        );
    load_theme_textdomain('exosight');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

}