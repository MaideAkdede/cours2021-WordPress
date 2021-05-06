<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php is_front_page() ? bloginfo('description') : wp_title('Mon site •'); ?></title>
    <!--ASSETS-->
    <link rel="stylesheet" href="<?= dw_assets('css/theme.css') ?>">
    <script src="<?= dw_assets('js/app.js') ?>"></script>
    <!--WORDPRESS-->
    <?php wp_head(); ?>
</head>
<body>
<header class="top">
    <h1 class="top__title"><?= is_front_page() ? 'Bienvenue ici !' : trim(wp_title('', false)); ?></h1>

    <nav class="top__language languages">
        <h2 class="sro">Sélectionner votre langue</h2>
        <p class="languages__current">Vous êtes actuellements en : <strong class="languages__lang">FR</strong></p>

        <ul class="languages__list">
            <li class="languages__item"><a href="#TODO" class="languages__link">FR</a></li>
            <li class="languages__item"><a href="#TODO" class="languages__link">EN</a></li>
            <li class="languages__item"><a href="#TODO" class="languages__link">NL</a></li>
        </ul>
    </nav>
</header>