<?php
$lang = 'en';
$page = 'contact';
$meta = [
    'title'       => 'Contact | Ecoturismo Lemunantu',
    'description' => 'Contact us via WhatsApp to check availability and book at Cabañas Lemunantu, Constitución, Maule Region, Chile.',
];
$css_extra = 'css/contacto.css';

require_once 'includes/header.php';
?>

    <main id="content">

        <!-- MAIN SECTION: WhatsApp + Info -->
        <section class="ctt-seccion">

            <div class="ctt-principal">

                <!-- WhatsApp block -->
                <div class="ctt-whatsapp-bloque">
                    <div class="ctt-wa-header">
                        <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
                        <div>
                            <h2>Write to us on WhatsApp</h2>
                            <p class="ctt-wa-subtitulo">The fastest way to get in touch with us.</p>
                        </div>
                    </div>

                    <p class="ctt-wa-descripcion">Tell us which dates you're interested in, how many people are travelling and what type of accommodation you're looking for. We'll get back to you shortly.</p>

                    <!-- Form that generates a WhatsApp message -->
                    <div class="ctt-form">
                        <div class="ctt-form-group">
                            <label for="nombre">Your name</label>
                            <input type="text" id="nombre" placeholder="e.g. Maria González" autocomplete="name">
                        </div>
                        <div class="ctt-form-row">
                            <div class="ctt-form-group">
                                <label for="llegada">Arrival date</label>
                                <input type="date" id="llegada">
                            </div>
                            <div class="ctt-form-group">
                                <label for="salida">Departure date</label>
                                <input type="date" id="salida">
                            </div>
                        </div>
                        <div class="ctt-form-group">
                            <label for="personas">Number of guests</label>
                            <input type="number" id="personas" min="1" max="62" placeholder="e.g. 4">
                        </div>
                        <div class="ctt-form-group">
                            <label for="mensaje">Additional message <span class="ctt-opcional">(optional)</span></label>
                            <textarea id="mensaje" rows="3" placeholder="e.g. We are travelling with a pet, is that OK?"></textarea>
                        </div>
                        <button class="ctt-btn-wa" id="btn-enviar" onclick="enviarWhatsApp()">
                            <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
                            Send via WhatsApp
                        </button>
                    </div>

                    <p class="ctt-wa-directo">
                        Prefer to write directly?
                        <a href="https://wa.me/56988237377" target="_blank" rel="noopener noreferrer">
                            Open WhatsApp without the form →
                        </a>
                    </p>
                </div>

                <!-- Side info block -->
                <aside class="ctt-info-lateral">

                    <div class="ctt-info-card">
                        <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
                        <div>
                            <h3>Where we are</h3>
                            <address>Junquillar Lote 5<br>Constitución, Maule Region, Chile</address>
                            <a href="https://maps.app.goo.gl/wKw27P3T3qDcFqxP6"
                               target="_blank"
                               rel="noopener noreferrer"
                               class="ctt-link-maps">
                                <i class="fa-solid fa-map-location-dot" aria-hidden="true"></i>
                                Open in Google Maps
                            </a>
                        </div>
                    </div>

                    <div class="ctt-info-card">
                        <i class="fa-solid fa-route" aria-hidden="true"></i>
                        <div>
                            <h3>How to get here</h3>
                            <p>From Constitución, cross the Raúl Silva Henríquez bridge and follow the coastal road north for 8 km. Our sign will be waiting at the roadside.</p>
                        </div>
                    </div>

                    <div class="ctt-info-card">
                        <i class="fa-solid fa-calendar-check" aria-hidden="true"></i>
                        <div>
                            <h3>Opening hours</h3>
                            <p>Open all year round. We answer WhatsApp enquiries during the day.</p>
                        </div>
                    </div>

                    <div class="ubicacion-mapa">
                        <div id="mapa-osm" class="osm-mapa" aria-label="Map showing location of Cabañas Lemunantu"></div>
                    </div>

                </aside>

            </div>

        </section>

    </main>

<script>
function enviarWhatsApp() {
    const nombre   = document.getElementById('nombre').value.trim();
    const llegada  = document.getElementById('llegada').value;
    const salida   = document.getElementById('salida').value;
    const personas = document.getElementById('personas').value;
    const mensaje  = document.getElementById('mensaje').value.trim();

    function formatFecha(f) {
        if (!f) return null;
        const [y, m, d] = f.split('-');
        const fecha = new Date(y, m - 1, d); // mes va de 0 a 11 en JS
        return fecha.toLocaleDateString('es-CL', {
            weekday: 'long',
            day: 'numeric',
            month: 'long',
            year: 'numeric'
        });
    }

    let partes = ['Hello, I would like to check availability at Cabañas Lemunantu.'];

    if (nombre)   partes.push(`*Name:* ${nombre}`);
    if (llegada)  partes.push(`*Arrival:* ${formatFecha(llegada)}`);
    if (salida)   partes.push(`*Departure:* ${formatFecha(salida)}`);
    if (personas) partes.push(`*Guests:* ${personas}`);
    if (mensaje)  partes.push(`*Message:* ${mensaje}`);

    const texto = partes.join('\n');
    const url   = `https://wa.me/56988237377?text=${encodeURIComponent(texto)}`;
    window.open(url, '_blank');
}

document.getElementById('nombre').addEventListener('input', function() {
    const btn = document.getElementById('btn-enviar');
    btn.disabled = this.value.trim().length === 0;
    btn.classList.toggle('ctt-btn-disabled', this.value.trim().length === 0);
});
</script>

\* Open Street Map
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
