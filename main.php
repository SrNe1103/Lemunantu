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
                <p>Surrounded by vegetation and overlooking the rural landscape of Maule, our cabins are the ideal place to disconnect, breathe deeply and enjoy the simple and natural.</p>
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
                        <p>Spacious green areas, a growing fruit trees and wooden seats for resting in the shade. The outdoor space is part of the charm.</p>
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
                        <img src="images/galeria/entorno/junquillar_norte.jpg" alt="Rural surroundings of Junquillar, Constitución">
                    </div>
                    <div class="highlight-contenido">
                        <i class="fa-solid fa-mountain-sun" aria-hidden="true"></i>
                        <h3>Unmatched surroundings</h3>
                        <p>Located in the Junquillar area, steps from the Maule Route. The beach, river, forests and wetlands  — everything you need for a real getaway just minutes from our site.</p>
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
                    <div id="mapa-osm" class="osm-mapa" aria-label="Map showing location of Cabañas Lemunantu"></div>
                </div>
            </div>
        </section>

    </main>


<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
(function() {
    var lat = -35.27373410581925;
    var lng = -72.34634231034285;
    var mapa = L.map('mapa-osm', { center: [lat, lng], zoom: 15, scrollWheelZoom: true });
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        maxZoom: 19
    }).addTo(mapa);
    var icono = L.divIcon({
        html: '<i class="fa-solid fa-location-dot" style="font-size:2em;color:#4d8c28;filter:drop-shadow(0 2px 3px rgba(0,0,0,0.4))"></i>',
        className: '',
        iconSize: [32, 32],
        iconAnchor: [16, 32],
        popupAnchor: [0, -34]
    });
    L.marker([lat, lng], { icon: icono })
        .addTo(mapa)
        .bindPopup('<strong>Ecoturismo Lemunantu</strong><br>Junquillar Lote 5, Constitución')
        .openPopup();
})();
</script>
<?php require_once 'includes/footer.php'; ?>
