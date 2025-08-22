#!/bin/bash

THEME_NAME="WooDHosT"
THEME_DIR="/var/www/pterodactyl/resources/themes/$THEME_NAME"
PANEL_DIR="/var/www/pterodactyl"

echo "🔍 فحص مسار الثيم..."
if [ ! -d "$THEME_DIR" ]; then
    echo "❌ مجلد الثيم $THEME_NAME غير موجود في $THEME_DIR"
    exit 1
else
    echo "✅ مجلد الثيم موجود"
fi

echo "🔍 فحص theme.json..."
if [ ! -f "$THEME_DIR/theme.json" ]; then
    echo "❌ theme.json غير موجود في $THEME_DIR"
    exit 1
else
    # التحقق من صحة JSON
    if ! jq empty "$THEME_DIR/theme.json" >/dev/null 2>&1; then
        echo "❌ theme.json غير صالح، تحقق من الصياغة"
        exit 1
    else
        echo "✅ theme.json صالح"
    fi
fi

echo "🔧 ضبط الصلاحيات..."
chown -R www-data:www-data "$THEME_DIR"
chmod -R 755 "$THEME_DIR"
echo "✅ الصلاحيات تم ضبطها"

echo "🧹 تنظيف الكاش..."
cd $PANEL_DIR
php artisan view:clear
php artisan cache:clear
php artisan config:clear
echo "✅ الكاش تم تنظيفه"

echo "🔄 إعادة تشغيل خدمات PHP/Nginx..."
systemctl restart php8.1-fpm
systemctl restart nginx
echo "✅ الخدمات تم إعادة تشغيلها"

echo "🎉 تم تجهيز الثيم $THEME_NAME! افتح لوحة Pterodactyl وتحقق من قائمة المظهر."
