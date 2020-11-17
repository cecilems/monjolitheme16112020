<?php

//ajouter une nouvelle zone de menus à mon thème


function register_my_menu(){
    register_nav_menus( array(
    'header-menu' => __( 'Menu De Tete'),
    'footer-menu' => __( 'Menu De Pied'),
    ) );
    }
    add_action( 'init', 'register_my_menu', 0 );