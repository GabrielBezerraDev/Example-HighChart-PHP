# Usar uma imagem base do PHP com Apache
FROM php:8.2-apache

# Instalar dependências do sistema
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    && rm -rf /var/lib/apt/lists/*

# Instalar o Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copiar o projeto para o diretório do Apache
COPY . /var/www/html/

# Instalar as dependências do Composer (se houver um composer.json)
WORKDIR /var/www/html
RUN if [ -f "composer.json" ]; then composer install; fi

# Habilitar o módulo rewrite do Apache (opcional, se precisar de URLs amigáveis)
RUN a2enmod rewrite

# Definir permissões para o diretório do projeto
RUN chown -R www-data:www-data /var/www/html

# Expor a porta 80
EXPOSE 80

# Iniciar o Apache
CMD ["apache2-foreground"]