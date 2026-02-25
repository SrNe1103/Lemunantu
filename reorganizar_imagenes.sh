#!/bin/bash
# =============================================================
#  reorganizar_imagenes.sh
#  Ejecutar desde la RAÍZ del proyecto (donde está index.php)
#  Crea la estructura images/galeria/ y mueve las fotos.
#  Las imágenes que siguen siendo usadas en otras páginas
#  se COPIAN (no mueven) para no romper los src existentes.
# =============================================================

set -e  # detener si hay error

echo "→ Creando estructura de carpetas..."
mkdir -p images/galeria/cabanas
mkdir -p images/galeria/piscina
mkdir -p images/galeria/salon
mkdir -p images/galeria/museo
mkdir -p images/galeria/entorno
mkdir -p images/galeria/instalaciones

echo "→ Moviendo imágenes a subcarpetas..."

# --- Cabañas ---
mv images/cabaña7.jpg   images/galeria/cabanas/
mv images/cabaña13.jpg  images/galeria/cabanas/
mv images/cabaña2.jpg   images/galeria/cabanas/

# --- Piscina y áreas verdes ---
cp images/pool.jpg              images/galeria/piscina/   # cp: sigue en servicios.php
cp images/vista_piscina2.jpg    images/galeria/piscina/   # cp: sigue en index.php
mv images/vista_piscina.jpg     images/galeria/piscina/

# --- Salón ---
cp images/salon.jpg             images/galeria/salon/     # cp: sigue en servicios.php

# --- Museo ---
cp images/museo.jpg             images/galeria/museo/     # cp: sigue en quienes_somos.php y servicios.php
mv images/museo_interior00.jpg  images/galeria/museo/
mv images/museo_interior01.jpg  images/galeria/museo/
mv images/museo_interior02.jpg  images/galeria/museo/
mv images/museo_interior03.jpg  images/galeria/museo/
mv images/museo_interior04.jpg  images/galeria/museo/
mv images/museo_interior05.jpg  images/galeria/museo/
mv images/museo_interior06.jpg  images/galeria/museo/
mv images/museo_interior07.jpg  images/galeria/museo/
mv images/museo_interior08.jpg  images/galeria/museo/
mv images/museo_interior09.jpg  images/galeria/museo/
mv images/museo_interior10.jpg  images/galeria/museo/
mv images/museo_interior11.jpg  images/galeria/museo/

# --- Entorno / paisaje ---
mv images/junquillar_norte.jpg  images/galeria/entorno/
mv images/junquillar_sur.jpg    images/galeria/entorno/
cp images/constitucion.jpg      images/galeria/entorno/   # cp: sigue en servicios.php
mv images/front.jpg             images/galeria/entorno/
mv images/front_2.jpg           images/galeria/entorno/

# --- Instalaciones ---
cp images/parking_up.jpg        images/galeria/instalaciones/  # cp: sigue en servicios.php
mv images/parking_up2.jpg       images/galeria/instalaciones/
cp images/parking.jpg           images/galeria/instalaciones/
cp images/children_playground.jpg images/galeria/instalaciones/
cp images/green_space.jpg       images/galeria/instalaciones/
cp images/green_space_up.jpg    images/galeria/instalaciones/
mv images/calefactor.jpg        images/galeria/instalaciones/  # mv: solo en quienes_somos (actualizar src)

echo ""
echo "✓ Listo. Estructura creada:"
find images/galeria -type f | sort

echo ""
echo "⚠ RECUERDA actualizar estos src en tus archivos PHP:"
echo "  calefactor.jpg  → images/galeria/instalaciones/calefactor.jpg"
echo "  (en quienes_somos.php y about_us.php, sección sustentabilidad)"
