# Image de base : PHP 8.2 avec Apache préinstallé
FROM php:8.2-apache
# Installa􀆟on des extensions PHP nécessaires pour MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql && a2enmod rewrite
# Définir le répertoire de travail dans le conteneur
WORKDIR /var/www/html
# Copier tous les fichiers de l'applica􀆟on dans le conteneur
COPY . /var/www/html/
# Exposer le port 80 (port par défaut HTTP)
EXPOSE 80
