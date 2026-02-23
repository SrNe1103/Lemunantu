<?php
$lang = 'en';
$page = 'services';
$meta = [
    'title'       => 'Services | Ecoturismo Lemunantu',
    'description' => 'Cabins, apartments and rooms with pool, green areas, event hall and more. Discover everything Ecoturismo Lemunantu offers in Constitución, Chile.',
];
$css_extra = 'css/servicios.css';

require_once 'includes/header.php';
?>

    <main id="content">

        <!-- SECTION 1: Accommodation -->
        <section class="srv-seccion srv-alojamiento">
            <div class="srv-seccion-header">
                <i class="fa-solid fa-bed" aria-hidden="true"></i>
                <h2>Accommodation</h2>
                <p class="srv-subtitulo">16 fully equipped units for up to 62 guests in total. All units include bed linen, kitchenware, cookware and a private bathroom.</p>
            </div>

            <div class="srv-cards-grid">
                <article class="srv-card">
                    <div class="srv-card-img-wrap">
                        <!-- PHOTO SUGGESTION: cabin exterior or interior -->
                        <img src="images/cabaña13.jpg" alt="Cabin example">
                    </div>
                    <div class="srv-card-contenido">
                        <h3><i class="fa-solid fa-house-chimney" aria-hidden="true"></i> Cabins</h3>
                        <p>Our wooden cabins are the most complete option. Fully equipped for a comfortable and independent stay, with capacity for up to <strong>7 guests</strong> per unit.</p>
                        <ul class="srv-amenities">
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Bed linen included</li>
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Equipped kitchen with cookware</li>
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Private bathroom</li>
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Up to 7 guests</li>
                        </ul>
                    </div>
                </article>

                <article class="srv-card">
                    <div class="srv-card-img-wrap">
                        <!-- PHOTO SUGGESTION: apartment interior -->
                        <img src="images/cabaña7.jpg" alt="Apartment example">
                    </div>
                    <div class="srv-card-contenido">
                        <h3><i class="fa-solid fa-building" aria-hidden="true"></i> Apartments</h3>
                        <p>Apartment-style units with independent layout, ideal for longer stays or groups who value having their own space.</p>
                        <ul class="srv-amenities">
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Bed linen included</li>
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Equipped kitchen with cookware</li>
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Private bathroom</li>
                        </ul>
                    </div>
                </article>

                <article class="srv-card">
                    <div class="srv-card-img-wrap">
                        <!-- PHOTO SUGGESTION: room with beds -->
                        <img src="images/cabaña2.jpg" alt="Room example">
                    </div>
                    <div class="srv-card-contenido">
                        <h3><i class="fa-solid fa-door-open" aria-hidden="true"></i> Rooms</h3>
                        <p>Equipped rooms for guests looking for a comfortable and practical option, with everything needed for a good rest.</p>
                        <ul class="srv-amenities">
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Bed linen included</li>
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Equipped kitchen with cookware</li>
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Private bathroom</li>
                        </ul>
                    </div>
                </article>
            </div>

            <p class="srv-nota"><i class="fa-solid fa-circle-info" aria-hidden="true"></i> To check availability and rates, visit our <a href="#contact">Contact</a> section.</p>
        </section>

        <!-- SECTION 2: Common facilities -->
        <section class="srv-seccion srv-instalaciones">
            <div class="srv-seccion-header">
                <i class="fa-solid fa-umbrella-beach" aria-hidden="true"></i>
                <h2>Common facilities</h2>
                <p class="srv-subtitulo">Included at no extra cost for all guests.</p>
            </div>

            <div class="srv-iconos-grid">
                <div class="srv-icono-item">
                    <div class="srv-icono-img-wrap">
                        <img src="images/pool.jpg" alt="Swimming pool at Cabañas Lemunantu">
                    </div>
                    <i class="fa-solid fa-person-swimming" aria-hidden="true"></i>
                    <h3>Swimming pool</h3>
                    <p>Available in summer season, surrounded by gardens and flowers. Perfect for the whole family.</p>
                </div>
                <div class="srv-icono-item">
                    <div class="srv-icono-img-wrap">
                        <img src="images/green_space.jpg" alt="Áreas verdes y jardines de Lemunantu">
                    </div>
                    <i class="fa-solid fa-tree" aria-hidden="true"></i>
                    <h3>Green areas</h3>
                    <p>Spacious gardens with benches, camping tables and barbecue grills available for guests.</p>
                </div>
                <div class="srv-icono-item">
                    <div class="srv-icono-img-wrap">
                        <!-- PHOTO SUGGESTION: children's play area -->
                        <img src="images/children_playground.jpg" alt="Áreas de juegos para niños de Cabañas Lemunantu">
                    </div>
                    <i class="fa-solid fa-children" aria-hidden="true"></i>
                    <h3>Children's play area</h3>
                    <p>Recreation space for the little ones, in a safe and peaceful environment.</p>
                </div>
                <div class="srv-icono-item">
                    <div class="srv-icono-img-wrap">
                        <!-- PHOTO SUGGESTION: parking area -->
                        <img src="images/parking_up.jpg" alt="Estacionamiento privado de Cabañas Lemunantu">
                    </div>
                    <i class="fa-solid fa-square-parking" aria-hidden="true"></i>
                    <h3>Private parking</h3>
                    <p>On-site parking at no extra cost for all guests.</p>
                </div>
                <div class="srv-icono-item">
                    <div class="srv-icono-img-wrap srv-icono-sin-foto">
                        <i class="fa-solid fa-wifi srv-big-icon" aria-hidden="true"></i>
                    </div>
                    <i class="fa-solid fa-wifi" aria-hidden="true"></i>
                    <h3>WiFi</h3>
                    <p>Wireless internet available throughout the property.</p>
                </div>
                <div class="srv-icono-item">
                    <div class="srv-icono-img-wrap srv-icono-sin-foto">
                        <i class="fa-solid fa-satellite-dish srv-big-icon" aria-hidden="true"></i>
                    </div>
                    <i class="fa-solid fa-satellite-dish" aria-hidden="true"></i>
                    <h3>Satellite TV</h3>
                    <p>Satellite television available in all accommodation units.</p>
                </div>
                <div class="srv-icono-item">
                    <div class="srv-icono-img-wrap srv-icono-sin-foto">
                        <i class="fa-solid fa-paw srv-big-icon" aria-hidden="true"></i>
                    </div>
                    <i class="fa-solid fa-paw" aria-hidden="true"></i>
                    <h3>Pet-friendly</h3>
                    <p>Pets are welcome at no extra charge. A feature that sets us apart in the area.</p>
                </div>
            </div>
        </section>

        <!-- SECTION 3: Event hall -->
        <section class="srv-seccion srv-salon">
            <div class="srv-salon-contenido">
                <div class="srv-texto">
                    <div class="srv-seccion-header srv-seccion-header--left">
                        <i class="fa-solid fa-champagne-glasses" aria-hidden="true"></i>
                        <h2>Event hall</h2>
                    </div>
                    <p>We have an event hall available for gatherings and celebrations, with capacity for up to <strong>40 people</strong>. A warm space with a wooden ceiling, fully equipped so your event runs without complications.</p>
                    <ul class="srv-amenities">
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> Tables and chairs for 40 people</li>
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> Kitchenware and utensils</li>
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> Kitchen and refrigerator</li>
                        <li><i class="fa-solid fa-check" aria-hidden="true"></i> Uruguayan barbecue (quincho)</li>
                    </ul>
                    <p class="srv-nota"><i class="fa-solid fa-circle-info" aria-hidden="true"></i> Available on reservation. <a href="#contact">Contact us</a> to check availability.</p>
                </div>
                <div class="srv-imagen">
                    <img src="images/salon.jpeg" alt="Event hall at Cabañas Lemunantu, capacity for 40 people">
                </div>
            </div>
        </section>

        <!-- SECTION 4: Museum + Tourist info -->
        <section class="srv-seccion srv-extras">
            <div class="srv-seccion-header">
                <i class="fa-solid fa-star" aria-hidden="true"></i>
                <h2>Also at Lemunantu</h2>
            </div>

            <div class="srv-extras-grid">
                <div class="srv-extra-item">
                    <div class="srv-extra-img-wrap">
                        <img src="images/museo.jpg" alt="Museo Memoria y Madera at Cabañas Lemunantu">
                    </div>
                    <div class="srv-extra-texto">
                        <i class="fa-solid fa-landmark" aria-hidden="true"></i>
                        <h3>Museo Memoria y Madera</h3>
                        <p>Within the property you can visit our small museum, which preserves the history of Constitución through photographs and objects. Entry is by <strong>voluntary contribution</strong>.</p>
                    </div>
                </div>
                <div class="srv-extra-item">
                    <div class="srv-extra-img-wrap srv-extra-sin-foto">
                        <i class="fa-solid fa-map-location-dot srv-big-icon" aria-hidden="true"></i>
                    </div>
                    <div class="srv-extra-texto">
                        <i class="fa-solid fa-circle-info" aria-hidden="true"></i>
                        <h3>Local tourist information</h3>
                        <p>Our team knows the area and can guide you on activities and destinations in and around Constitución — from beaches to routes and points of interest throughout the Maule Region.</p>
                    </div>
                </div>
            </div>
        </section>

    </main>

<?php require_once 'includes/footer.php'; ?>
