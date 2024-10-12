# Gunakan image PHP versi 8.2 dengan Apache
FROM php:8.2-apache

# Install dependency yang dibutuhkan, termasuk libssl
RUN apt-get update && apt-get install -y \
    libssl1.1 \
    libssl-dev \
    && docker-php-ext-install pdo_mysql

# Copy semua file dari proyek ke dalam Docker container
COPY . /var/www/html

# Set working directory menjadi folder project di dalam container
WORKDIR /var/www/html

# Expose port 80 agar aplikasi bisa diakses
EXPOSE 80

# Jalankan Apache di foreground agar container tetap berjalan
CMD ["apache2-foreground"]
