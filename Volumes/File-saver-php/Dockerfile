
# Usando a imagem php 8 com apache
FROM php:8-apache

# Diretório de trabalho
WORKDIR /var/www/html

# Copiar todos os arquivos da pasta onde está o dockerfile para workdir
COPY . .

RUN chown -R www-data:www-data /var/www