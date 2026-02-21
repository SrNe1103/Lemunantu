<?php
$lang = 'en';
$page = 'home';

require_once 'includes/header.php';
?>

    <main id="content">

        <!-- SECTION 1: Welcome -->
        <section class="seccion-bienvenida">
            <div class="bienvenida-texto">
                <h2>Welcome to Lemunantu</h2>
                <p>Come visit <strong>the Pearl of Maule</strong> and stay with us to escape the hustle and bustle of the city. At Cabañas Lemunantu you will find a refuge of nature, tranquility and fresh air just 8 km from Constitución.</p>
                <p>Surrounded by native vegetation and overlooking the rural landscape of Maule, our wooden cabins are the ideal place to disconnect, breathe deeply and reconnect with what matters most.</p>
                <a href="#how-to-get-here" class="btn-principal">How to get here</a>
            </div>
            <div class="bienvenida-imagen">
                <img src="images/vista_piscina2.jpg" alt="Cabañas Lemunantu with pool and garden">
            </div>
        </section>

        <!-- SECTION 2: Highlights -->
        <section class="seccion-highlights" id="services">
            <h2 class="seccion-titulo">A place for every moment</h2>
            <div class="highlights-grid">
                <article class="highlight-card">
                    <div class="highlight-img-wrap">
                        <img src="images/green_space_up.jpg" alt="Gardens and green areas at Lemunantu">
                    </div>
                    <div class="highlight-contenido">
                        <i class="fa-solid fa-leaf" aria-hidden="true"></i>
                        <h3>Nature & gardens</h3>
                        <p>Spacious green areas, a growing fruit orchard and a wooden gazebo for resting in the shade. The outdoor space is part of the charm.</p>
                    </div>
                </article>
                <article class="highlight-card">
                    <div class="highlight-img-wrap">
                        <img src="images/pool.jpg" alt="Swimming pool at Cabañas Lemunantu">
                    </div>
                    <div class="highlight-contenido">
                        <i class="fa-solid fa-person-swimming" aria-hidden="true"></i>
                        <h3>Pool & recreation</h3>
                        <p>Enjoy our flower-surrounded pool during summer. Perfect for families, with shaded areas and lawn to relax on.</p>
                    </div>
                </article>
                <article class="highlight-card">
                    <div class="highlight-img-wrap">
                        <img src="images/junquillar_norte.jpg" alt="Rural surroundings of Junquillar, Constitución">
                    </div>
                    <div class="highlight-contenido">
                        <i class="fa-solid fa-mountain-sun" aria-hidden="true"></i>
                        <h3>Unmatched surroundings</h3>
                        <p>Located in the Junquillar area, steps from the Maule Route. Forests, open skies and the river nearby — everything you need for a real getaway.</p>
                    </div>
                </article>
            </div>
        </section>

        <!-- SECTION 3: How to get here -->
        <section class="seccion-ubicacion" id="how-to-get-here">
            <h2 class="seccion-titulo">How to get here</h2>
            <div class="ubicacion-contenido">
                <div class="ubicacion-texto">
                    <p>We are located <strong>8 km north of Constitución</strong>, in the Junquillar area. From the city, cross the Raúl Silva Henríquez bridge and follow the coastal road north — our sign will be waiting for you at the roadside.</p>
                    <address>
                        <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
                        Junquillar Lote 5, Constitución, Maule Region, Chile
                    </address>
                    <a href="https://maps.app.goo.gl/wKw27P3T3qDcFqxP6"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="btn-maps"
                       title="Open in Google Maps">
                        <i class="fa-solid fa-map-location-dot" aria-hidden="true"></i>
                        Open in Google Maps
                    </a>
                </div>
                <div class="ubicacion-mapa">
                    <img src="images/mapa_constitucion.jpg" alt="Map showing location of Cabañas Lemunantu near Constitución">
                </div>
            </div>
        </section>

    </main>

<?php require_once 'includes/footer.php'; ?>
