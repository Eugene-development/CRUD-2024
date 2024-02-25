# Используйте официальный образ PHP FPM
FROM php:8.2-fpm-alpine

# Установите расширения PHP, которые требуются для Laravel
RUN docker-php-ext-install pdo pdo_mysql

# Установите Composer для управления зависимостями PHP
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Установите рабочий каталог для вашего приложения Laravel
WORKDIR /var/www

# Копируйте существующий исходный код приложения в контейнер
COPY . /var/www

# Установите зависимости с помощью Composer
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Назначьте права на каталог приложения
RUN chown -R www-data:www-data /var/www

# Предоставьте права на запись для каталога хранения и кэша
RUN chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Опубликуйте порт 9000 для доступа к PHP-FPM
EXPOSE 9000

# Запустите PHP-FPM в режиме фонового процесса
CMD ["php-fpm"]
