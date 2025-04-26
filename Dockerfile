# استخدام صورة PHP من Docker Hub
FROM php:7.4-apache

# تثبيت Composer إذا كان ضروريًا
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# نسخ ملفات المشروع إلى الحاوية
COPY . /var/www/html/

# إعدادات الخادم
EXPOSE 80
