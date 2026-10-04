#!/bin/bash
# ==============================================================================
# SMEXAPRO VPS DEPLOY + OPTIMIZE SCRIPT
# Domain: https://smexapro.my.id
# VPS: Ubuntu 24.04 | Apache + PHP-FPM 8.2 | Webuzo
# Target: Lighthouse 95+ (Performance, Accessibility, Best Practices, SEO)
# ==============================================================================

set -e
APP_DIR="/home/smexamall/smexamall"
PHP="/usr/local/apps/php82/bin/php"
COMPOSER="/usr/local/bin/composer"
PHP_INI="/usr/local/apps/php82/etc/php.ini"
FPM_CONF="/usr/local/apps/php82/etc/fpm-smexamall.conf"
APACHE_CONF="/usr/local/apps/apache2/etc/conf.d/webuzoVH.conf"

echo ""
echo "======================================================"
echo " SMEXAPRO DEPLOY & OPTIMIZE — $(date)"
echo "======================================================"

# ------------------------------------------------------------------------------
# 1. Pull latest code from GitHub
# ------------------------------------------------------------------------------
echo ""
echo "[1/9] Pulling latest code from GitHub..."
cd "$APP_DIR"
git config --global --add safe.directory "$APP_DIR"
git fetch origin
git reset --hard origin/main 2>/dev/null || git reset --hard origin/master 2>/dev/null
echo "✅ Code updated."

# ------------------------------------------------------------------------------
# 2. Fix permissions
# ------------------------------------------------------------------------------
echo ""
echo "[2/9] Setting correct permissions..."
chown -R smexamall:smexamall "$APP_DIR"
chmod -R 755 "$APP_DIR/storage" "$APP_DIR/bootstrap/cache"
chmod -R 644 "$APP_DIR/.env"
echo "✅ Permissions set."

# ------------------------------------------------------------------------------
# 3. Composer install (no-dev, optimized autoloader)
# ------------------------------------------------------------------------------
echo ""
echo "[3/9] Installing composer dependencies..."
cd "$APP_DIR"
sudo -u smexamall "$COMPOSER" install \
    --no-interaction \
    --no-dev \
    --optimize-autoloader \
    --classmap-authoritative \
    2>&1 | tail -5
echo "✅ Composer done."

# ------------------------------------------------------------------------------
# 4. Set production .env
# ------------------------------------------------------------------------------
echo ""
echo "[4/9] Configuring production .env..."
cd "$APP_DIR"
$PHP artisan key:generate --force 2>/dev/null || true

# Update env settings
sed -i 's/APP_ENV=.*/APP_ENV=production/' .env
sed -i 's/APP_DEBUG=.*/APP_DEBUG=false/' .env
sed -i 's|APP_URL=.*|APP_URL=https://smexapro.my.id|' .env
sed -i 's/LOG_LEVEL=.*/LOG_LEVEL=error/' .env
sed -i 's/CACHE_STORE=.*/CACHE_STORE=file/' .env
sed -i 's/SESSION_DRIVER=.*/SESSION_DRIVER=file/' .env
echo "✅ .env configured."

# ------------------------------------------------------------------------------
# 5. Laravel cache optimization
# ------------------------------------------------------------------------------
echo ""
echo "[5/9] Running Laravel optimizations..."
cd "$APP_DIR"
$PHP artisan config:clear
$PHP artisan route:clear
$PHP artisan view:clear
$PHP artisan cache:clear
$PHP artisan event:clear

$PHP artisan config:cache
$PHP artisan route:cache
$PHP artisan view:cache
$PHP artisan event:cache
$PHP artisan optimize

echo "✅ Laravel caches built."

# ------------------------------------------------------------------------------
# 6. Run migrations + seed
# ------------------------------------------------------------------------------
echo ""
echo "[6/9] Running database migrations..."
cd "$APP_DIR"
$PHP artisan migrate --force 2>&1 | tail -5
echo "✅ Migrations done."

# ------------------------------------------------------------------------------
# 7. OPcache configuration
# ------------------------------------------------------------------------------
echo ""
echo "[7/9] Configuring OPcache..."

# Detect OPcache ini file
OPCACHE_INI=$(find /usr/local/apps/php82 -name "*opcache*" 2>/dev/null | grep -v example | head -1)
if [ -z "$OPCACHE_INI" ]; then
    # Write OPcache directives directly into php.ini
    if grep -q "opcache.enable" "$PHP_INI" 2>/dev/null; then
        sed -i 's/;opcache.enable=.*/opcache.enable=1/' "$PHP_INI"
        sed -i 's/opcache.enable=.*/opcache.enable=1/' "$PHP_INI"
        sed -i 's/;opcache.memory_consumption=.*/opcache.memory_consumption=256/' "$PHP_INI"
        sed -i 's/opcache.memory_consumption=.*/opcache.memory_consumption=256/' "$PHP_INI"
        sed -i 's/;opcache.max_accelerated_files=.*/opcache.max_accelerated_files=20000/' "$PHP_INI"
        sed -i 's/;opcache.revalidate_freq=.*/opcache.revalidate_freq=0/' "$PHP_INI"
        sed -i 's/;opcache.validate_timestamps=.*/opcache.validate_timestamps=0/' "$PHP_INI"
        sed -i 's/;opcache.jit_buffer_size=.*/opcache.jit_buffer_size=128M/' "$PHP_INI"
    fi
else
    cat > "$OPCACHE_INI" << 'OPCACHE_EOF'
[opcache]
opcache.enable=1
opcache.enable_cli=0
opcache.memory_consumption=256
opcache.interned_strings_buffer=16
opcache.max_accelerated_files=20000
opcache.revalidate_freq=0
opcache.validate_timestamps=0
opcache.fast_shutdown=1
opcache.jit_buffer_size=128M
opcache.jit=1255
OPCACHE_EOF
fi

# Disable broken memcached extension
MEMCACHED_INI=$(find /usr/local/apps/php82 -name "*memcached*" 2>/dev/null | head -1)
if [ -n "$MEMCACHED_INI" ]; then
    mv "$MEMCACHED_INI" "$MEMCACHED_INI.disabled" 2>/dev/null || true
fi

echo "✅ OPcache configured."

# ------------------------------------------------------------------------------
# 8. PHP-FPM tuning
# ------------------------------------------------------------------------------
echo ""
echo "[8/9] Tuning PHP-FPM..."
if [ -f "$FPM_CONF" ]; then
    # Dynamic process manager for better CPU usage
    sed -i 's/pm = .*/pm = dynamic/' "$FPM_CONF" 2>/dev/null || true
    sed -i 's/pm.max_children = .*/pm.max_children = 20/' "$FPM_CONF" 2>/dev/null || true
    sed -i 's/pm.start_servers = .*/pm.start_servers = 4/' "$FPM_CONF" 2>/dev/null || true
    sed -i 's/pm.min_spare_servers = .*/pm.min_spare_servers = 2/' "$FPM_CONF" 2>/dev/null || true
    sed -i 's/pm.max_spare_servers = .*/pm.max_spare_servers = 8/' "$FPM_CONF" 2>/dev/null || true
    sed -i 's/pm.max_requests = .*/pm.max_requests = 500/' "$FPM_CONF" 2>/dev/null || true
fi
echo "✅ PHP-FPM tuned."

# ------------------------------------------------------------------------------
# 9. Restart services
# ------------------------------------------------------------------------------
echo ""
echo "[9/9] Restarting services..."
# Restart PHP-FPM
service php-fpm82 restart 2>/dev/null || /etc/init.d/php-fpm82 restart 2>/dev/null || true

# Graceful Apache reload
/usr/local/apps/apache2/sbin/apachectl graceful 2>/dev/null || \
    /usr/local/apps/apache2/bin/apachectl graceful 2>/dev/null || true

sleep 2

echo ""
echo "======================================================"
echo " ✅ DEPLOY COMPLETE!"
echo " 🌐 Site: https://smexapro.my.id"
echo " 📅 Time: $(date)"
echo "======================================================"
echo ""

# Quick health check
echo "Health check:"
curl -s -o /dev/null -w "HTTP %{http_code} | Time: %{time_total}s | Size: %{size_download}B\n" \
    https://smexapro.my.id/ --max-time 15 --insecure 2>/dev/null || \
    curl -s -o /dev/null -w "HTTP %{http_code} | Time: %{time_total}s\n" \
    http://101.50.1.15/ --max-time 15 2>/dev/null || echo "⚠️  Health check inconclusive"
