#!/usr/bin/env bash
# ------------------------------------------------------------
#  Actualiza el portafolio en Hostinger (jazmin-lomeli.com).
#  Lo corre GitHub Actions en cada push a main (.github/workflows/deploy.yml).
#  A mano, por SSH:  cd ~/domains/jazmin-lomeli.com/public_html && bash deploy.sh
# ------------------------------------------------------------
set -e
cd "$(dirname "$0")"

# El sitio corre en PHP 8.4; la consola usa otra versión por defecto
if [ -z "$PHP_BIN" ]; then
  if [ -x /opt/alt/php84/usr/bin/php ]; then PHP_BIN=/opt/alt/php84/usr/bin/php; else PHP_BIN=php; fi
fi
echo "→ PHP: $("$PHP_BIN" -r 'echo PHP_VERSION;')"

echo "→ Descargando cambios…"
git pull --ff-only

echo "→ Instalando dependencias de PHP…"
# Hostinger desactiva proc_open para la web (seguridad); Composer lo necesita
# solo durante este comando en la consola.
"$PHP_BIN" -d disable_functions= "$(command -v composer)" install --no-dev --optimize-autoloader --no-interaction

echo "→ Limpiando y preparando cachés…"
# Sin optimize:clear: también vacía la caché de la base de datos y el
# portafolio no usa base de datos.
"$PHP_BIN" artisan config:clear
"$PHP_BIN" artisan route:clear
"$PHP_BIN" artisan view:clear
"$PHP_BIN" artisan config:cache
"$PHP_BIN" artisan view:cache

echo "✅ Listo."
