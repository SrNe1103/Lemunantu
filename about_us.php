<?php
$lang = 'en';
$page = 'about';
$meta = [
    'title'       => 'About us | Ecoturismo Lemunantu',
    'description' => 'Learn about Cabañas Lemunantu, a family project founded in 2003 in Constitución, Maule Region, Chile. Over 20 years welcoming families.',
];
$css_extra = 'css/quienes_somos.css';

require_once 'includes/header.php';
?>

    <main id="content">

        <!-- SECTION 1: History -->
        <section class="qs-seccion qs-historia">
            <div class="qs-texto">
                <h2>Our story</h2>
                <p>Lemunantu was born in <strong>2003</strong> as a family project in the Junquillar area, along the coastal road north of Constitución. It started simply: camping and a swimming pool. No big investments, no magic formula — just steady work and the belief that this place had something special.</p>
                <p>Over the years, one by one, the cabins were added. One, then another, then one more. Today the lodge has <strong>16 accommodation units</strong> — cabins, rooms and apartment-style rooms — with capacity for <strong>62 guests</strong>.</p>
                <p>Behind every construction are the same people as always: our parents, who have built this project with their own hands and at their own pace, never losing the family spirit that has defined it from the start.</p>
            </div>
            <div class="qs-imagen">
                <img src="images/museo.jpg" alt="Exterior del museo Memoria y Madera">
            </div>
        </section>

        <!-- SECTION 2: Values -->
        <section class="qs-seccion qs-valores">
            <h2 class="seccion-titulo">A place worth coming back to</h2>
            <div class="qs-valores-grid">
                <div class="qs-valor-item">
                    <i class="fa-solid fa-house-chimney" aria-hidden="true"></i>
                    <h3>Family-run</h3>
                    <p>We are still a family business, with very few outside employees. That shows in the care, the details, and the way the place is looked after.</p>
                </div>
                <div class="qs-valor-item">
                    <i class="fa-solid fa-rotate" aria-hidden="true"></i>
                    <h3>Guests who return</h3>
                    <p>Many of our guests come back year after year. That, more than any award, is the recognition we are most proud of.</p>
                </div>
                <div class="qs-valor-item">
                    <i class="fa-solid fa-paw" aria-hidden="true"></i>
                    <h3>Pet-friendly</h3>
                    <p>Pets are welcome. We know that for many families travelling without them is not an option, and at Lemunantu they don't have to choose.</p>
                </div>
                <div class="qs-valor-item">
                    <i class="fa-solid fa-calendar-check" aria-hidden="true"></i>
                    <h3>Open all year</h3>
                    <p>We operate all four seasons. Every time of year has its own charm in this corner of Maule, and there is always a cabin waiting for you.</p>
                </div>
            </div>
        </section>

        <!-- SECTION 3: Sustainability -->
        <section class="qs-seccion qs-sustentabilidad">
            <div class="qs-imagen">
                <!-- PHOTO SUGGESTION: solar water heater or grey water system installed on site -->
                <div class="qs-imagen-placeholder">
                    <i class="fa-solid fa-image" aria-hidden="true"></i>
                    <span>Photo of sustainable installations</span>
                </div>
            </div>
            <div class="qs-texto">
                <h2>Working towards sustainability</h2>
                <p>The name <em>Lemunantu</em> — evoking in Mapudungún the light that filters through the forest — is no coincidence. From the beginning, the natural surroundings have been part of the identity of this place, and over the years we have wanted to care for them more consciously.</p>
                <p>So far we have installed a <strong>solar water heater</strong> and a <strong>grey water reuse system</strong>. We have also applied for solar photovoltaic energy projects for the property — a path we continue to explore.</p>
                <p>We are honest: there are still steps ahead, especially in waste management. But the direction is clear and we keep working on it.</p>
            </div>
        </section>

        <!-- SECTION 4: Museum -->
        <section class="qs-seccion qs-museo">
            <div class="qs-texto">
                <h2>Memoria y Madera</h2>
                <p>Last year we opened a small museum within the property itself. Through <strong>historical photographs and objects</strong>, "Memoria y Madera" (Memory and Wood) aims to preserve and share the history of Constitución — its people, its traditions, its past.</p>
                <p>It was also built by our parents. A personal project that became something every visitor can walk through and enjoy.</p>
            </div>
            <div class="qs-imagen">
                <img src="images/museo.jpg" alt="Memoria y Madera museum outside">
            </div>
        </section>

        <!-- SECTION 5: SERNATUR / Groups -->
        <section class="qs-seccion-banner">
            <i class="fa-solid fa-people-group" aria-hidden="true"></i>
            <div>
                <h2>We welcome groups and special programmes</h2>
                <p>In recent years we have hosted the <strong>SERNATUR Family Tourism programme</strong>, as well as groups such as sports teams, senior citizen associations and other organisations. With capacity for <strong>62 guests</strong>, the lodge is ready to receive them.</p>
            </div>
        </section>

    </main>

<?php require_once 'includes/footer.php'; ?>
