<?php
$lang = 'es';
$page = 'about';
$meta = [
    'title'       => 'Quiénes somos | Ecoturismo Lemunantu',
    'description' => 'Conoce la historia de Cabañas Lemunantu, un proyecto familiar nacido en 2003 en Constitución, Región del Maule. Más de 20 años acogiendo familias.',
];
$css_extra = 'css/quienes_somos.css';

require_once 'includes/header.php';
?>

    <main id="content">

        <!-- SECCIÓN 1: Historia -->
        <section class="qs-seccion qs-historia">
            <div class="qs-texto">
                <h2>Nuestra historia</h2>
                <p>Lemunantu nació en <strong>2003</strong> como un proyecto familiar en el sector de Junquillar, a orillas de la ruta costera al norte de Constitución. En sus inicios era un lugar sencillo: camping y piscina. Sin grandes inversiones, sin fórmulas mágicas — solo trabajo constante y la convicción de que el lugar tenía algo especial.</p>
                <p>Con los años, de a poco, fueron sumándose las cabañas. Una, luego otra, luego otra más. Hoy el recinto cuenta con <strong>16 unidades de alojamiento</strong> — entre cabañas, habitaciones y habitaciones tipo departamento — con capacidad para <strong>62 personas</strong>.</p>
                <p>Detrás de cada construcción están los mismos de siempre: nuestros papás, que han llevado adelante este proyecto con sus propias manos y a su propio ritmo, sin perder el carácter familiar que lo define desde el principio.</p>
            </div>
            <div class="qs-imagen">
                <!-- Imagen procesada: upscaling + edición manual + Nano Banana/Gemini -->
                <img src="images/history.jpg" alt="Foto antigua de Cabañas Lemunantu en 2005">
            </div>
        </section>

        <!-- SECCIÓN 2: Valores / Por qué volver -->
        <section class="qs-seccion qs-valores">
            <h2 class="seccion-titulo">Un lugar para volver</h2>
            <div class="qs-valores-grid">
                <div class="qs-valor-item">
                    <i class="fa-solid fa-house-chimney" aria-hidden="true"></i>
                    <h3>Empresa familiar</h3>
                    <p>Seguimos siendo un negocio de familia, con pocos empleados externos. Eso se nota en el trato, en los detalles y en cómo está cuidado el espacio.</p>
                </div>
                <div class="qs-valor-item">
                    <i class="fa-solid fa-rotate" aria-hidden="true"></i>
                    <h3>Visitas que se repiten</h3>
                    <p>Muchos de nuestros huéspedes regresan año tras año. Eso, más que cualquier certificado, es el reconocimiento que más nos enorgullece.</p>
                </div>
                <div class="qs-valor-item">
                    <i class="fa-solid fa-paw" aria-hidden="true"></i>
                    <h3>Pet-friendly</h3>
                    <p>Las mascotas son bienvenidas. Sabemos que para muchas familias viajar sin ellas no es opción, y en Lemunantu no tienen que elegir.</p>
                </div>
                <div class="qs-valor-item">
                    <i class="fa-solid fa-calendar-check" aria-hidden="true"></i>
                    <h3>Abiertos todo el año</h3>
                    <p>Funcionamos las cuatro estaciones. Cada época tiene su encanto en este rincón del Maule, y siempre hay una cabaña esperándote.</p>
                </div>
            </div>
        </section>

        <!-- SECCIÓN 3: Sustentabilidad -->
        <section class="qs-seccion qs-sustentabilidad">
            <div class="qs-imagen">
                <!-- FOTO SUGERIDA: panel solar o calefactor solar instalado en el recinto -->
                <img src="images/calefactor.jpg" alt="Calefactor solar de agua en Cabañas Lemunantu">
            </div>
            <div class="qs-texto">
                <h2>Avanzando hacia la sustentabilidad</h2>
                <p>El nombre <em>Lemunantu</em> — que en mapudungún evoca la luz que atraviesa el bosque — no es casual. Desde el comienzo, el entorno natural ha sido parte de la identidad del lugar, y con los años hemos querido cuidarlo de forma más consciente.</p>
                <p>Hasta ahora hemos instalado un <strong>calefactor de agua solar</strong> y un sistema de <strong>reutilización de aguas grises</strong>. También hemos postulado a proyectos de energía solar fotovoltaica para el recinto — un camino que seguimos explorando.</p>
                <p>Somos honestos: todavía hay pasos pendientes, especialmente en el manejo de residuos. Pero la dirección es clara y seguimos trabajando en ello.</p>
            </div>
        </section>

        <!-- SECCIÓN 4: Museo -->
        <section class="qs-seccion qs-museo">
            <div class="qs-texto">
                <h2>Memoria y Madera</h2>
                <p>En el último año inauguramos un pequeño museo dentro del propio recinto. A través de <strong>fotografías históricas y objetos</strong>, "Memoria y Madera" busca rescatar y mostrar el pasado de Constitución — su gente, sus costumbres, su historia.</p>
                <p>También fue construido por nuestros papás. Es un proyecto personal que se convirtió en algo que cualquier visitante puede recorrer y disfrutar.</p>
            </div>
            <div class="qs-imagen">
                <img src="images/museo.jpg" alt="Exterior del museo Memoria y Madera">
            </div>
        </section>

        <!-- SECCIÓN 5: SERNATUR / Grupos -->
        <section class="qs-seccion-banner">
            <i class="fa-solid fa-people-group" aria-hidden="true"></i>
            <div>
                <h2>Recibimos grupos y programas especiales</h2>
                <p>En los últimos años hemos acogido el programa <strong>Turismo Familia de SERNATUR</strong>, además de grupos como equipos deportivos, agrupaciones de adultos mayores y otras organizaciones. Con capacidad para <strong>62 personas</strong>, el recinto está preparado para recibirlos.</p>
            </div>
        </section>

    </main>

<?php require_once 'includes/footer.php'; ?>
