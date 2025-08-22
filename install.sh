#!/bin/bash

# مسار التثبيت النهائي للثيم
THEME_DIR="/var/www/pterodactyl/resources/themes/WooDHosT"

# إنشاء المجلد إذا لم يكن موجود
mkdir -p $THEME_DIR

# نسخ كل ملفات الثيم إلى المسار الصحيح
cp -R ./* $THEME_DIR

# تعيين الأذونات
chown -R www-data:www-data $THEME_DIR

# تنظيف الكاش فورًا
cd /var/www/pterodactyl
php artisan view:clear
php artisan cache:clear
php artisan config:clear

echo "WooDHosT theme installed and ready!"
