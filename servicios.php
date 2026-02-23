<?php
$lang = 'es';
$page = 'services';
$meta = [
    'title'       => 'Servicios | Ecoturismo Lemunantu',
    'description' => 'Cabañas, departamentos y habitaciones con piscina, áreas verdes, salón de eventos y más. Conoce todo lo que ofrece Ecoturismo Lemunantu en Constitución.',
];
$css_extra = 'css/servicios.css';

require_once 'includes/header.php';
?>

    <main id="content">

        <!-- SECCIÓN 1: Alojamiento -->
        <section class="srv-seccion srv-alojamiento">
            <div class="srv-seccion-header">
                <i class="fa-solid fa-bed" aria-hidden="true"></i>
                <h2>Alojamiento</h2>
                <p class="srv-subtitulo">16 unidades equipadas para hasta 62 personas en total. Todas incluyen sábanas, loza, ollas, cocina y baño privado.</p>
            </div>

            <div class="srv-cards-grid">
                <article class="srv-card">
                    <div class="srv-card-img-wrap">
                        <img src="images/cabaña13.jpg" alt="Cabaña de ejemplo">
                    </div>
                    <div class="srv-card-contenido">
                        <h3><i class="fa-solid fa-house-chimney" aria-hidden="true"></i> Cabañas</h3>
                        <p>Nuestras cabañas de madera son la opción más completa. Cuentan con todo lo necesario para una estadía cómoda e independiente, con capacidad de hasta <strong>7 personas</strong> por unidad.</p>
                        <ul class="srv-amenities">
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Sábanas y ropa de cama</li>
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Cocina equipada con loza y ollas</li>
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Baño privado</li>
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Hasta 7 personas</li>
                        </ul>
                    </div>
                </article>

                <article class="srv-card">
                    <div class="srv-card-img-wrap">
                        <!-- FOTO SUGERIDA: interior de departamento tipo -->
                        <div class="srv-img-placeholder">
                            <i class="fa-solid fa-image" aria-hidden="true"></i>
                            <span>Foto departamento</span>
                        </div>
                    </div>
                    <div class="srv-card-contenido">
                        <h3><i class="fa-solid fa-building" aria-hidden="true"></i> Departamentos</h3>
                        <p>Unidades tipo departamento con distribución independiente, ideales para estadías más largas o grupos que valoran tener su propio espacio.</p>
                        <ul class="srv-amenities">
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Sábanas y ropa de cama</li>
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Cocina equipada con loza y ollas</li>
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Baño privado</li>
                        </ul>
                    </div>
                </article>

                <article class="srv-card">
                    <div class="srv-card-img-wrap">
                        <!-- FOTO SUGERIDA: habitación tipo con camas -->
                        <div class="srv-img-placeholder">
                            <i class="fa-solid fa-image" aria-hidden="true"></i>
                            <span>Foto habitación</span>
                        </div>
                    </div>
                    <div class="srv-card-contenido">
                        <h3><i class="fa-solid fa-door-open" aria-hidden="true"></i> Habitaciones</h3>
                        <p>Habitaciones equipadas para quienes buscan una opción cómoda y práctica, con todo lo esencial para descansar bien.</p>
                        <ul class="srv-amenities">
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Sábanas y ropa de cama</li>
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Cocina equipada con loza y ollas</li>
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Baño privado</li>
                        </ul>
                    </div>
                </article>
            </div>

            <p class="srv-nota"><i class="fa-solid fa-circle-info" aria-hidden="true"></i> Para consultar disponibilidad y tarifas, visita nuestra sección de <a href="#contacto">Contacto</a>.</p>
        </section>

        <!-- SECCIÓN 2: Instalaciones comunes -->
        <section class="srv-seccion srv-instalaciones">
            <div class="srv-seccion-header">
                <i class="fa-solid fa-umbrella-beach" aria-hidden="true"></i>
                <h2>Instalaciones comunes</h2>
                <p class="srv-subtitulo">Incluidas sin costo adicional para todos los huéspedes.</p>
            </div>

            <div class="srv-iconos-grid">
                <div class="srv-icono-item">
                    <div class="srv-icono-img-wrap">
                        <img src="images/pool.jpg" alt="Piscina de Cabañas Lemunantu">
                    </div>
                    <i class="fa-solid fa-person-swimming" aria-hidden="true"></i>
                    <h3>Piscina</h3>
                    <p>Disponible en temporada estival, rodeada de jardines y flores. Perfecta para toda la familia.</p>
                </div>
                <div class="srv-icono-item">
                    <div class="srv-icono-img-wrap">
                        <img src="images/green_space.jpg" alt="Áreas verdes y jardines de Lemunantu">
                    </div>
                    <i class="fa-solid fa-tree" aria-hidden="true"></i>
                    <h3>Áreas verdes</h3>
                    <p>Amplios jardines con bancas, mesas de camping y parrillas disponibles para los huéspedes.</p>
                </div>
                <div class="srv-icono-item">
                    <div class="srv-icono-img-wrap">
                        <!-- FOTO SUGERIDA: juegos para niños o área de recreación -->
                        <img src="images/children_playground.jpg" alt="Áreas de juegos para niños de Cabañas Lemunantu">
                    </div>
                    <i class="fa-solid fa-children" aria-hidden="true"></i>
                    <h3>Juegos infantiles</h3>
                    <p>Espacio de recreación para los más chicos, en un entorno seguro y tranquilo.</p>
                </div>
                <div class="srv-icono-item">
                    <div class="srv-icono-img-wrap">
                        <!-- FOTO SUGERIDA: estacionamiento del recinto -->
                        <img src="images/parking_up.jpg" alt="Estacionamiento privado de Cabañas Lemunantu">
                    </div>
                    <i class="fa-solid fa-square-parking" aria-hidden="true"></i>
                    <h3>Estacionamiento privado</h3>
                    <p>Estacionamiento dentro del recinto, sin costo adicional para los huéspedes.</p>
                </div>
                <div class="srv-icono-item">
                    <div class="srv-icono-img-wrap srv-icono-sin-foto">
                        <i class="fa-solid fa-wifi srv-big-icon" aria-hidden="true"></i>
                    </div>
                    <i class="fa-solid fa-wifi" aria-hidden="true"></i>
                    <h3>WiFi</h3>
                    <p>Señal de internet inalámbrico disponible en el recinto.</p>
                </div>
                <div class="srv-icono-item">
                    <div class="srv-icono-img-wrap srv-icono-sin-foto">
                        <i class="fa-solid fa-satellite-dish srv-big-icon" aria-hidden="true"></i>
                    </div>
                    <i class="fa-solid fa-satellite-dish" aria-hidden="true"></i>
                    <h3>TV satelital</h3>
                    <p>Televisión satelital disponible en las unidades de alojamiento.</p>
                </div>
                <div class="srv-icono-item">
                    <div class="srv-icono-img-wrap srv-icono-sin-foto">
                        <i class="fa-solid fa-paw srv-big-icon" aria-hidden="true"></i>
                    </div>
                    <i class="fa-solid fa-paw" aria-hidden="true"></i>
                    <h3>Pet-friendly</h3>
                    <p>Las mascotas son bienvenidas sin costo adicional. Una característica que nos distingue en la zona.</p>
                </div>
            </div>
        </section>

        <!-- SECCIÓN 3: Salón de eventos -->
        <section class="srv-seccion srv-salon">
            <div class="srv-salon-contenido">
                <div class="srv-texto">
                    <div class="srv-seccion-header srv-seccion-header--left">
                        <i class="fa-solid fa-champagne-glasses" aria-hidden="true"></i>
                        <h2>Salón de eventos</h2>
                    </div>
                    <p>Contamos con un salón disponible para eventos y reuniones con capacidad para hasta <strong>40 personas</strong>. Un espacio cálido con techo de madera, completamente equipado para que tu celebración sea sin complicaciones.</p>
                    <ul class="srv-amenities">
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> Mesas y sillas para 40 personas</li>
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> Loza y utensilios de cocina</li>
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> Cocina y refrigerador</li>
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> Quincho Uruguayo</li>
                    </ul>
                    <p class="srv-nota"><i class="fa-solid fa-circle-info" aria-hidden="true"></i> Disponible bajo reserva. <a href="#contacto">Contáctanos</a> para consultar disponibilidad.</p>
                </div>
                <div class="srv-imagen">
                    <img src="images/salon.jpeg" alt="Salón de eventos de Cabañas Lemunantu con capacidad para 40 personas">
                </div>
            </div>
        </section>

        <!-- SECCIÓN 4: Museo + Info turística -->
        <section class="srv-seccion srv-extras">
            <div class="srv-seccion-header">
                <i class="fa-solid fa-star" aria-hidden="true"></i>
                <h2>Además, en Lemunantu</h2>
            </div>

            <div class="srv-extras-grid">
                <div class="srv-extra-item">
                    <div class="srv-extra-img-wrap">
                        <img src="images/museo.jpg" alt="Museo Memoria y Madera en Cabañas Lemunantu">
                    </div>
                    <div class="srv-extra-texto">
                        <i class="fa-solid fa-landmark" aria-hidden="true"></i>
                        <h3>Museo Memoria y Madera</h3>
                        <p>Dentro del propio recinto podrás recorrer nuestro pequeño museo, que rescata la historia de Constitución a través de fotografías y objetos. El recorrido es con <strong>aporte voluntario</strong>.</p>
                    </div>
                </div>
                <div class="srv-extra-item">
                    <div class="srv-extra-img-wrap srv-extra-sin-foto">
                        <i class="fa-solid fa-map-location-dot srv-big-icon" aria-hidden="true"></i>
                    </div>
                    <div class="srv-extra-texto">
                        <i class="fa-solid fa-circle-info" aria-hidden="true"></i>
                        <h3>Información turística local</h3>
                        <p>Nuestro equipo conoce la zona y puede orientarte sobre las actividades y destinos disponibles en Constitución y alrededores — desde playas hasta rutas y puntos de interés en la Región del Maule.</p>
                    </div>
                </div>
            </div>
        </section>

    </main>

<?php require_once 'includes/footer.php'; ?>
