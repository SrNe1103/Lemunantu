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

                    <div class="ctt-mapa-wrap">
                        <img src="images/mapa_constitucion.jpg" alt="Mapa de ubicación de Cabañas Lemunantu en Constitución">
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
        return `${d}/${m}/${y}`;
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

<?php require_once 'includes/footer.php'; ?>
