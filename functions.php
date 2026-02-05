<?php

    function newdevelopments_register_styles(): void
    {
        $theme_version  = wp_get_theme()->get( 'Version' );
        $version_string = is_string( $theme_version ) ? $theme_version : false;

        wp_register_style(
            'newdevelopments-style',
            get_template_directory_uri() . '/style.css',
            $version_string
        );

        wp_enqueue_style( 'newdevelopments-style' );

    }
    add_action( 'wp_enqueue_scripts', 'newdevelopments_register_styles' );
