<?php
$lang = 'en';
$page = 'gallery';
$meta = [
    'title'       => 'Gallery | Ecoturismo Lemunantu',
    'description' => 'Photos of Cabañas Lemunantu in Constitución: accommodation, pool, event hall, museum and natural surroundings.',
];
$css_extra = 'css/galeria.css';

require_once 'includes/header.php';

$categorias = [
    'todas'         => ['label' => 'All',               'icon' => 'fa-grip'],
    'cabanas'       => ['label' => 'Cabins',            'icon' => 'fa-house-chimney'],
    'piscina'       => ['label' => 'Pool & gardens',    'icon' => 'fa-person-swimming'],
    'salon'         => ['label' => 'Event hall',        'icon' => 'fa-champagne-glasses'],
    'museo'         => ['label' => 'Museum',            'icon' => 'fa-landmark'],
    'entorno'       => ['label' => 'Surroundings',      'icon' => 'fa-mountain-sun'],
    'instalaciones' => ['label' => 'Facilities',        'icon' => 'fa-tree'],
];

$imagenes = [];
$extensiones = ['jpg', 'jpeg', 'png', 'webp', 'JPG', 'JPEG', 'PNG', 'WEBP'];

foreach ($categorias as $slug => $cat) {
    if ($slug === 'todas') continue;

    $carpeta = "images/galeria/{$slug}/";
    if (!is_dir($carpeta)) continue;

    foreach (new DirectoryIterator($carpeta) as $archivo) {
        if ($archivo->isDot() || $archivo->isDir()) continue;
        if (!in_array($archivo->getExtension(), $extensiones)) continue;

        $imagenes[] = [
            'src'       => $carpeta . $archivo->getFilename(),
            'categoria' => $slug,
            'alt'       => $cat['label'] . ' — Ecoturismo Lemunantu',
        ];
    }
}
?>

    <main id="content">

        <section class="gal-seccion">

            <div class="gal-header">
                <h2>Gallery</h2>
                <p class="gal-subtitulo">Get to know our spaces before you arrive.</p>
            </div>

            <div class="gal-filtros" role="group" aria-label="Filter gallery by category">
                <?php foreach ($categorias as $slug => $cat): ?>
                <button
                    class="gal-filtro-btn <?= $slug === 'todas' ? 'activo' : '' ?>"
                    data-filtro="<?= $slug ?>"
                    aria-pressed="<?= $slug === 'todas' ? 'true' : 'false' ?>">
                    <i class="fa-solid <?= $cat['icon'] ?>" aria-hidden="true"></i>
                    <?= $cat['label'] ?>
                </button>
                <?php endforeach; ?>
            </div>

            <?php if (empty($imagenes)): ?>
                <p class="gal-vacio">No images available yet.</p>
            <?php else: ?>
            <div class="gal-grid" id="gal-grid">
                <?php foreach ($imagenes as $img): ?>
                <div class="gal-item" data-categoria="<?= $img['categoria'] ?>">
                    <button class="gal-item-btn" onclick="abrirLightbox(this)" aria-label="View full image">
                        <img
                            src="<?= htmlspecialchars($img['src']) ?>"
                            alt="<?= htmlspecialchars($img['alt']) ?>"
                            loading="lazy">
                    </button>
                </div>
                <?php endforeach; ?>
            </div>
            <p class="gal-contador" id="gal-contador"></p>
            <?php endif; ?>

        </section>

        <div class="gal-lightbox" id="lightbox" role="dialog" aria-modal="true" aria-label="Full image view" hidden>
            <button class="gal-lb-cerrar" onclick="cerrarLightbox()" aria-label="Close">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <button class="gal-lb-prev" onclick="navegarLightbox(-1)" aria-label="Previous">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <div class="gal-lb-contenido">
                <img id="lb-img" src="" alt="">
                <p id="lb-categoria" class="gal-lb-categoria"></p>
            </div>
            <button class="gal-lb-next" onclick="navegarLightbox(1)" aria-label="Next">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>
        <div class="gal-lb-overlay" id="lb-overlay" onclick="cerrarLightbox()" hidden></div>

    </main>

<script>
let itemsVisibles = [];
let indiceActual  = 0;

document.querySelectorAll('.gal-filtro-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        const filtro = this.dataset.filtro;
        document.querySelectorAll('.gal-filtro-btn').forEach(b => {
            b.classList.remove('activo');
            b.setAttribute('aria-pressed', 'false');
        });
        this.classList.add('activo');
        this.setAttribute('aria-pressed', 'true');

        document.querySelectorAll('.gal-item').forEach(item => {
            const coincide = filtro === 'todas' || item.dataset.categoria === filtro;
            item.classList.toggle('oculto', !coincide);
        });

        actualizarContador(filtro);
    });
});

function actualizarContador(filtro) {
    const items    = document.querySelectorAll('.gal-item');
    const visibles = [...items].filter(i => !i.classList.contains('oculto')).length;
    const total    = items.length;
    const contador = document.getElementById('gal-contador');
    if (contador) {
        contador.textContent = filtro === 'todas'
            ? `${total} photos`
            : `${visibles} of ${total} photos`;
    }
}

actualizarContador('todas');

function abrirLightbox(btn) {
    itemsVisibles = [...document.querySelectorAll('.gal-item:not(.oculto) .gal-item-btn')];
    indiceActual  = itemsVisibles.indexOf(btn);
    cargarImagen(indiceActual);
    document.getElementById('lightbox').hidden   = false;
    document.getElementById('lb-overlay').hidden = false;
    document.body.style.overflow = 'hidden';
    document.querySelector('.gal-lb-cerrar').focus();
}

function cargarImagen(idx) {
    const btn  = itemsVisibles[idx];
    const img  = btn.querySelector('img');
    const item = btn.closest('.gal-item');
    const labels = <?= json_encode(array_map(fn($c) => $c['label'], array_filter($categorias, fn($k) => $k !== 'todas', ARRAY_FILTER_USE_KEY)), JSON_UNESCAPED_UNICODE) ?>;
    document.getElementById('lb-img').src = img.src;
    document.getElementById('lb-img').alt = img.alt;
    document.getElementById('lb-categoria').textContent = labels[item.dataset.categoria] ?? '';
}

function navegarLightbox(direccion) {
    indiceActual = (indiceActual + direccion + itemsVisibles.length) % itemsVisibles.length;
    cargarImagen(indiceActual);
}

function cerrarLightbox() {
    document.getElementById('lightbox').hidden   = true;
    document.getElementById('lb-overlay').hidden = true;
    document.body.style.overflow = '';
}

document.addEventListener('keydown', function(e) {
    if (document.getElementById('lightbox').hidden) return;
    if (e.key === 'ArrowRight') navegarLightbox(1);
    if (e.key === 'ArrowLeft')  navegarLightbox(-1);
    if (e.key === 'Escape')     cerrarLightbox();
});
</script>

<?php require_once 'includes/footer.php'; ?>
