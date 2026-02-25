<?php
$lang = 'es';
$page = 'contact';
$meta = [
    'title'       => 'Contacto | Ecoturismo Lemunantu',
    'description' => 'Contáctanos por WhatsApp para consultar disponibilidad y reservar en Cabañas Lemunantu, Constitución, Región del Maule.',
];
$css_extra = 'css/contacto.css';

require_once 'includes/header.php';
?>

    <main id="content">

        <!-- SECCIÓN PRINCIPAL: WhatsApp + Info -->
        <section class="ctt-seccion">

            <div class="ctt-principal">

                <!-- Bloque WhatsApp -->
                <div class="ctt-whatsapp-bloque">
                    <div class="ctt-wa-header">
                        <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
                        <div>
                            <h2>Escríbenos por WhatsApp</h2>
                            <p class="ctt-wa-subtitulo">La forma más rápida de ponerse en contacto con nosotros.</p>
                        </div>
                    </div>

                    <p class="ctt-wa-descripcion">Cuéntanos qué fechas te interesan, cuántas personas son y qué tipo de alojamiento buscas. Te respondemos a la brevedad.</p>

                    <!-- Formulario que genera mensaje para WhatsApp -->
                    <div class="ctt-form">
                        <div class="ctt-form-group">
                            <label for="nombre">Tu nombre</label>
                            <input type="text" id="nombre" placeholder="Ej: María González" autocomplete="name">
                        </div>
                        <div class="ctt-form-row">
                            <div class="ctt-form-group">
                                <label for="llegada">Fecha de llegada</label>
                                <input type="date" id="llegada">
                            </div>
                            <div class="ctt-form-group">
                                <label for="salida">Fecha de salida</label>
                                <input type="date" id="salida">
                            </div>
                        </div>
                        <div class="ctt-form-group">
                            <label for="personas">N° de personas</label>
                            <input type="number" id="personas" min="1" max="62" placeholder="Ej: 4">
                        </div>
                        <div class="ctt-form-group">
                            <label for="mensaje">Mensaje adicional <span class="ctt-opcional">(opcional)</span></label>
                            <textarea id="mensaje" rows="3" placeholder="Ej: Viajamos con una mascota, ¿hay disponibilidad?"></textarea>
                        </div>
                        <button class="ctt-btn-wa" id="btn-enviar" onclick="enviarWhatsApp()">
                            <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
                            Enviar por WhatsApp
                        </button>
                    </div>

                    <p class="ctt-wa-directo">
                        ¿Prefieres escribir directamente?
                        <a href="https://wa.me/56988237377" target="_blank" rel="noopener noreferrer">
                            Abrir WhatsApp sin formulario →
                        </a>
                    </p>
                </div>

                <!-- Bloque Info lateral -->
                <aside class="ctt-info-lateral">

                    <div class="ctt-info-card">
                        <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
                        <div>
                            <h3>Dónde estamos</h3>
                            <address>Junquillar Lote 5<br>Constitución, Región del Maule</address>
                            <a href="https://maps.app.goo.gl/wKw27P3T3qDcFqxP6"
                               target="_blank"
                               rel="noopener noreferrer"
                               class="ctt-link-maps">
                                <i class="fa-solid fa-map-location-dot" aria-hidden="true"></i>
                                Ver en Google Maps
                            </a>
                        </div>
                    </div>

                    <div class="ctt-info-card">
                        <i class="fa-solid fa-route" aria-hidden="true"></i>
                        <div>
                            <h3>Cómo llegar</h3>
                            <p>Desde Constitución, cruzar el puente Raúl Silva Henríquez y seguir la ruta costera hacia el norte por 8 km. Nuestro letrero estará al borde de la carretera.</p>
                        </div>
                    </div>

                    <div class="ctt-info-card">
                        <i class="fa-solid fa-calendar-check" aria-hidden="true"></i>
                        <div>
                            <h3>Horario de atención</h3>
                            <p>Abiertos todo el año. Atendemos consultas por WhatsApp durante el día.</p>
                        </div>
                    </div>

                    <div class="ubicacion-mapa">
                        <div id="mapa-osm" class="osm-mapa" aria-label="Mapa de ubicación de Cabañas Lemunantu"></div>
                    </div>

                </aside>

            </div>

        </section>

    </main>

<script>
function enviarWhatsApp() {
    const nombre  = document.getElementById('nombre').value.trim();
    const llegada = document.getElementById('llegada').value;
    const salida  = document.getElementById('salida').value;
    const personas = document.getElementById('personas').value;
    const mensaje = document.getElementById('mensaje').value.trim();

    // Formatear fechas a DD/MM/YYYY si están disponibles
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

    let partes = ['Hola, me gustaría consultar disponibilidad en Cabañas Lemunantu.'];

    if (nombre)   partes.push(`*Nombre:* ${nombre}`);
    if (llegada)  partes.push(`*Llegada:* ${formatFecha(llegada)}`);
    if (salida)   partes.push(`*Salida:* ${formatFecha(salida)}`);
    if (personas) partes.push(`*Personas:* ${personas}`);
    if (mensaje)  partes.push(`*Mensaje:* ${mensaje}`);

    const texto = partes.join('\n');
    const url   = `https://wa.me/56988237377?text=${encodeURIComponent(texto)}`;
    window.open(url, '_blank');
}

// Validación mínima: deshabilitar botón si no hay nombre
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
