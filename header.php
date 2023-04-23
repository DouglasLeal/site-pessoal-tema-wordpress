<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
          integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <?php wp_head(); ?>
</head>

<body id="inicio">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="./">
            <p class="navbar-brand-titulo">Douglas Leal</p>
            <p class="navbar-brand-subtitulo"><i class="navbar-brand-icone fa-solid fa-code"></i> Desenvolvedor web
            </p>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <div class="box-icones">
                <span class="navbar-toggler-icone"></span>
                <span class="navbar-toggler-icone"></span>
                <span class="navbar-toggler-icone"></span>
            </div>
        </button>
        <?php
        if (has_nav_menu('menu_principal')) {
            wp_nav_menu([
                'theme_location' => 'menu_principal',
                'depth' => 1, // 1 = no dropdowns, 2 = with dropdowns.
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'navbarResponsive',
                'menu_class' => 'navbar-nav ms-auto',
                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                'walker' => new WP_Bootstrap_Navwalker(),
            ]);
        }
        ?>
    </div>
</nav>

