FROM php:8.3-apache

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    zip \
    unzip \
    libonig-dev \
    libxml2-dev \
    curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    pdo_mysql \
    mbstring \
    zip \
    intl \
    soap

# Enable mod_rewrite (required for clean URLs in CakePHP or similar)
RUN a2enmod rewrite

# ✅ Critical fix: Allow .htaccess overrides
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Old method (commented out)
# RUN rm -rf /var/www/html/* /var/www/html/.* 2>/dev/null || true

# Clears existing content inside /var/www/html before copying
RUN find /var/www/html -mindepth 1 -delete

# Copy source code into container
COPY . /var/www/html

# Set correct permissions for CakePHP
RUN chown -R www-data:www-data /var/www/html/tmp /var/www/html/logs \
    && chmod -R 775 /var/www/html/tmp /var/www/html/logs
