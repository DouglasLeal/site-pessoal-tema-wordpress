<?php

function dl_scripts_e_estilos(): void
{

    wp_enqueue_style(
        'my-custom-styles',
        get_template_directory_uri() . '/assets/css/style.css' );
}
add_action('wp_enqueue_scripts', 'dl_scripts_e_estilos');
