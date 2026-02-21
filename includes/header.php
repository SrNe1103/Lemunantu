<?php
// --- Configuración por defecto ---
// Estas variables deben ser definidas en cada página ANTES de hacer el include.
// Si no se definen, se usan estos valores de respaldo.
$lang  = $lang  ?? 'es';
$page  = $page  ?? 'home';
$meta  = $meta  ?? [];

// --- Textos según idioma ---
$i18n = [
    'es' => [
        'skip_link'   => 'Saltar al contenido',
        'logo_alt'    => 'Logo de Lemunantu',
        'tagline'     => 'Disfruta la luz del bosque',
        'lang_switch' => ['href' => 'main.php',  'title' => 'Go to English version'],
        'nav' => [
            'home'    => ['href' => 'index.php',         'label' => 'Página principal'],
            'about'   => ['href' => 'quienes_somos.php', 'label' => 'Quiénes somos'],
            'services'=> ['href' => '#servicios',        'label' => 'Servicios'],
            'gallery' => ['href' => '#galeria',          'label' => 'Galería'],
            'contact' => ['href' => '#contacto',         'label' => 'Contacto'],
        ],
    ],
    'en' => [
        'skip_link'   => 'Skip to main content',
        'logo_alt'    => 'Lemunantu logo',
        'tagline'     => 'Your Trustworthy Lodge',
        'lang_switch' => ['href' => 'index.php', 'title' => 'Ir a la versión en español'],
        'nav' => [
            'home'    => ['href' => 'main.php',   'label' => 'Main page'],
            'about'   => ['href' => 'about_us.php','label' => 'About us'],
            'services'=> ['href' => '#services',  'label' => 'Services'],
            'gallery' => ['href' => '#gallery',   'label' => 'Gallery'],
            'contact' => ['href' => '#contact',   'label' => 'Contact'],
        ],
    ],
];

// --- Meta tags por defecto si la página no los define ---
$default_meta = [
    'es' => [
        'title'       => 'Ecoturismo Lemunantu | Cabañas en Constitución',
        'description' => 'Descansa en nuestras cabañas de ecoturismo en Constitución, Región del Maule. Naturaleza, tranquilidad y desconexión a minutos de la ciudad.',
    ],
    'en' => [
        'title'       => 'Ecoturismo Lemunantu | Lodge in Constitución, Chile',
        'description' => 'Stay at our eco-lodge near Constitución, Maule Region. Nature, peace and relaxation just minutes from the city.',
    ],
];

$title       = $meta['title']       ?? $default_meta[$lang]['title'];
$description = $meta['description'] ?? $default_meta[$lang]['description'];
$t           = $i18n[$lang];
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title) ?></title>
    <meta name="description" content="<?= htmlspecialchars($description) ?>">

    <link rel="icon" type="image/png" href="images/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c95afb8a60.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/inicio.css">
</head>
<body>
    <a href="#content" class="skip-link"><?= $t['skip_link'] ?></a>

    <header id="top">
        <img src="images/logo.png" alt="<?= $t['logo_alt'] ?>">
        <br>
        <h1 class="libre-franklin-title">Ecoturismo Lemunantu</h1>
        <p><?= $t['tagline'] ?></p>
    </header>

    <nav>
        <ul>
            <li class="lang-switch">
                <a href="<?= $t['lang_switch']['href'] ?>" title="<?= $t['lang_switch']['title'] ?>" class="icon">
                    <i class="fa-solid fa-language" aria-label="<?= $t['lang_switch']['title'] ?>"></i>
                </a>
            </li>
            <?php foreach ($t['nav'] as $key => $item): ?>
            <li<?= ($page === $key) ? ' class="current"' : '' ?>>
                <a href="<?= $item['href'] ?>"><?= $item['label'] ?></a>
            </li>
            <?php endforeach; ?>
        </ul>
    </nav>
