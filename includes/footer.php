<?php
// $t y $lang ya están disponibles desde header.php
$footer_i18n = [
    'es' => [
        'back_to_top' => 'Inicio de página',
        'maps_title'  => 'Ir a Maps',
    ],
    'en' => [
        'back_to_top' => 'Back to top',
        'maps_title'  => 'Go to Maps',
    ],
];
$ft = $footer_i18n[$lang];
?>
    <footer>
        <p>&copy; Ecoturismo Lemunantu</p>
        <address>
            <a href="https://maps.app.goo.gl/wKw27P3T3qDcFqxP6" title="<?= $ft['maps_title'] ?>">
                Junquillar Lote 5, Constitución
            </a>
        </address>
        <a href="#top"><?= $ft['back_to_top'] ?></a>
    </footer>
</body>
</html>
