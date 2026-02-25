<?php
$lang = 'es';
$page = 'gallery';
$meta = [
    'title'       => 'Galería | Ecoturismo Lemunantu',
    'description' => 'Fotos de Cabañas Lemunantu en Constitución: alojamiento, piscina, salón de eventos, museo y entorno natural.',
];
$css_extra = 'css/galeria.css';

require_once 'includes/header.php';

// --- Definición de categorías ---
// Para agregar una categoría nueva: añadir una entrada a este array
// y crear la carpeta correspondiente en images/galeria/
$categorias = [
    'todas'          => ['label' => 'Todas',              'icon' => 'fa-grip'],
    'cabanas'        => ['label' => 'Cabañas',            'icon' => 'fa-house-chimney'],
    'piscina'        => ['label' => 'Piscina y jardines', 'icon' => 'fa-person-swimming'],
    'salon'          => ['label' => 'Salón de eventos',   'icon' => 'fa-champagne-glasses'],
    'museo'          => ['label' => 'Museo',              'icon' => 'fa-landmark'],
    'entorno'        => ['label' => 'Entorno',            'icon' => 'fa-mountain-sun'],
    'instalaciones'  => ['label' => 'Instalaciones',      'icon' => 'fa-tree'],
];

// --- Carga dinámica de imágenes desde subcarpetas ---
// Para agregar fotos: simplemente sube el archivo jpg/jpeg/png/webp
// a la subcarpeta correspondiente. No hace falta tocar este código.
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
            'alt'       => ucfirst($cat['label']) . ' — Ecoturismo Lemunantu',
        ];
    }
}
?>

    <main id="content">

        <section class="gal-seccion">

            <div class="gal-header">
                <h2>Galería</h2>
                <p class="gal-subtitulo">Conoce nuestros espacios antes de llegar.</p>
            </div>

            <!-- Filtros -->
            <div class="gal-filtros" role="group" aria-label="Filtrar galería por categoría">
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

            <!-- Grid de imágenes -->
            <?php if (empty($imagenes)): ?>
                <p class="gal-vacio">No hay imágenes disponibles aún.</p>
            <?php else: ?>
            <div class="gal-grid" id="gal-grid">
                <?php foreach ($imagenes as $img): ?>
                <div class="gal-item" data-categoria="<?= $img['categoria'] ?>">
                    <button class="gal-item-btn" onclick="abrirLightbox(this)" aria-label="Ver imagen ampliada">
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

        <!-- Lightbox -->
        <div class="gal-lightbox" id="lightbox" role="dialog" aria-modal="true" aria-label="Imagen ampliada" hidden>
            <button class="gal-lb-cerrar" onclick="cerrarLightbox()" aria-label="Cerrar">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <button class="gal-lb-prev" onclick="navegarLightbox(-1)" aria-label="Anterior">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <div class="gal-lb-contenido">
                <img id="lb-img" src="" alt="">
                <p id="lb-categoria" class="gal-lb-categoria"></p>
            </div>
            <button class="gal-lb-next" onclick="navegarLightbox(1)" aria-label="Siguiente">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>
        <div class="gal-lb-overlay" id="lb-overlay" onclick="cerrarLightbox()" hidden></div>

    </main>

<script>
// --- Estado ---
let itemsVisibles = [];
let indiceActual  = 0;

// --- Filtros ---
document.querySelectorAll('.gal-filtro-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        const filtro = this.dataset.filtro;

        // Actualizar botones activos
        document.querySelectorAll('.gal-filtro-btn').forEach(b => {
            b.classList.remove('activo');
            b.setAttribute('aria-pressed', 'false');
        });
        this.classList.add('activo');
        this.setAttribute('aria-pressed', 'true');

        // Mostrar/ocultar items con animación
        const items = document.querySelectorAll('.gal-item');
        items.forEach(item => {
            const coincide = filtro === 'todas' || item.dataset.categoria === filtro;
            item.classList.toggle('oculto', !coincide);
        });

        actualizarContador(filtro);
    });
});

// --- Contador ---
function actualizarContador(filtro) {
    const items = document.querySelectorAll('.gal-item');
    const visibles = [...items].filter(i => !i.classList.contains('oculto')).length;
    const total    = items.length;
    const contador = document.getElementById('gal-contador');
    if (contador) {
        contador.textContent = filtro === 'todas'
            ? `${total} fotos`
            : `${visibles} de ${total} fotos`;
    }
}

// Inicializar contador
actualizarContador('todas');

// --- Lightbox ---
function abrirLightbox(btn) {
    const img = btn.querySelector('img');

    // Construir lista de items visibles en orden actual
    itemsVisibles = [...document.querySelectorAll('.gal-item:not(.oculto) .gal-item-btn')];
    indiceActual  = itemsVisibles.indexOf(btn);

    cargarImagen(indiceActual);

    document.getElementById('lightbox').hidden  = false;
    document.getElementById('lb-overlay').hidden = false;
    document.body.style.overflow = 'hidden';

    // Foco accesible
    document.querySelector('.gal-lb-cerrar').focus();
}

function cargarImagen(idx) {
    const btn = itemsVisibles[idx];
    const img = btn.querySelector('img');
    const item = btn.closest('.gal-item');
    const categoria = item.dataset.categoria;

    document.getElementById('lb-img').src = img.src;
    document.getElementById('lb-img').alt = img.alt;

    // Etiqueta de categoría legible
    const labels = <?= json_encode(array_map(fn($c) => $c['label'], array_filter($categorias, fn($k) => $k !== 'todas', ARRAY_FILTER_USE_KEY)), JSON_UNESCAPED_UNICODE) ?>;
    document.getElementById('lb-categoria').textContent = labels[categoria] ?? '';
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

// Teclado: flechas y Escape
document.addEventListener('keydown', function(e) {
    if (document.getElementById('lightbox').hidden) return;
    if (e.key === 'ArrowRight') navegarLightbox(1);
    if (e.key === 'ArrowLeft')  navegarLightbox(-1);
    if (e.key === 'Escape')     cerrarLightbox();
});
</script>

<?php require_once 'includes/footer.php'; ?>
