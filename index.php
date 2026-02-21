<?php
$lang = 'es';
$page = 'home';

require_once 'includes/header.php';
?>

    <main id="content">

        <!-- SECCIÓN 1: Bienvenida -->
        <section class="seccion-bienvenida">
            <div class="bienvenida-texto">
                <h2>Bienvenidos a Lemunantu</h2>
                <p>Ven a recorrer <strong>La Perla del Maule</strong> y quédate con nosotros a descansar del ajetreo de la ciudad. En Cabañas Lemunantu encontrarás un refugio de naturaleza, tranquilidad y aire puro a tan solo 8 km de Constitución.</p>
                <p>Rodeados de vegetación nativa y con vista al entorno rural del Maule, nuestras cabañas de madera son el lugar ideal para desconectarse, respirar profundo y reconectar con lo esencial.</p>
                <a href="#como-llegar" class="btn-principal">¿Cómo llegar?</a>
            </div>
            <div class="bienvenida-imagen">
                <img src="images/vista_piscina2.jpg" alt="Cabañas Lemunantu con piscina y jardín">
            </div>
        </section>

        <!-- SECCIÓN 2: Highlights -->
        <section class="seccion-highlights" id="servicios">
            <h2 class="seccion-titulo">Un lugar para cada momento</h2>
            <div class="highlights-grid">
                <article class="highlight-card">
                    <div class="highlight-img-wrap">
                        <img src="images/green_space_up.jpg" alt="Jardines y áreas verdes de Lemunantu">
                    </div>
                    <div class="highlight-contenido">
                        <i class="fa-solid fa-leaf" aria-hidden="true"></i>
                        <h3>Naturaleza y jardines</h3>
                        <p>Amplias áreas verdes, huerto frutal en crecimiento y una glorieta de madera para descansar a la sombra. El espacio exterior es parte del encanto.</p>
                    </div>
                </article>
                <article class="highlight-card">
                    <div class="highlight-img-wrap">
                        <img src="images/pool.jpg" alt="Piscina de Cabañas Lemunantu">
                    </div>
                    <div class="highlight-contenido">
                        <i class="fa-solid fa-person-swimming" aria-hidden="true"></i>
                        <h3>Piscina y recreación</h3>
                        <p>Disfruta nuestra piscina rodeada de flores en temporada estival. Perfecta para la familia, con espacios de sombra y césped para relajarse.</p>
                    </div>
                </article>
                <article class="highlight-card">
                    <div class="highlight-img-wrap">
                        <img src="images/junquillar_norte.jpg" alt="Entorno rural de Junquillar, Constitución">
                    </div>
                    <div class="highlight-contenido">
                        <i class="fa-solid fa-mountain-sun" aria-hidden="true"></i>
                        <h3>Entorno inigualable</h3>
                        <p>Ubicados en el sector de Junquillar, a pasos de la Ruta del Maule. Bosques, cielo abierto y el río cerca — todo lo que necesitas para una escapada real.</p>
                    </div>
                </article>
            </div>
        </section>

        <!-- SECCIÓN 3: Cómo llegar -->
        <section class="seccion-ubicacion" id="como-llegar">
            <h2 class="seccion-titulo">¿Cómo llegar?</h2>
            <div class="ubicacion-contenido">
                <div class="ubicacion-texto">
                    <p>Nos encontramos a <strong>8 km al norte de Constitución</strong>, en el sector de Junquillar. Desde la ciudad, cruzar el puente Raúl Silva Henríquez y seguir por la ruta costera hacia el norte — nuestro letrero te estará esperando al borde de la carretera.</p>
                    <address>
                        <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
                        Junquillar Lote 5, Constitución, Región del Maule
                    </address>
                    <a href="https://maps.app.goo.gl/wKw27P3T3qDcFqxP6"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="btn-maps"
                       title="Abrir en Google Maps">
                        <i class="fa-solid fa-map-location-dot" aria-hidden="true"></i>
                        Ver en Google Maps
                    </a>
                </div>
                <div class="ubicacion-mapa">
                    <img src="images/mapa_constitucion.jpg" alt="Mapa de ubicación de Cabañas Lemunantu en Constitución">
                </div>
            </div>
        </section>

    </main>

<?php require_once 'includes/footer.php'; ?>
