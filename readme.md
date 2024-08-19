# Proyecto Final Programacion IV
## Guia de instalacion
### Xampp
1. Extrer archivos o descargar repositorio.
2. Copiar y pegar archivos de la carpeta www a la carpeta htdocs de xampp, en la raiz o subdirectorio de preferencia.
3. Ejecutar el script install.php. ejemplo: http://localhost/install.php (proyecto en la raiz)
### Docker
1. Crear variables de entorno o archivo .env en raiz del proyecto.
`
# Project Options
PROJECT_NAME=foro-php
# PHP Options
PHP_VERSION=7.4-apache
PHP_PORT=80
# MySQL Options
MYSQL_VERSION=5.7
MYSQL_USER=dbuser
MYSQL_PASSWORD=dbpass
MYSQL_DATABASE=dbname
`
2. Ajustar variables del siguiente archivo /www/inc/config.php con las creadas como variables de entorno.
3. ejecutar docker-compose up -d

## Estructura del proyecto
-docker
-www
-- css (Estilos)
-- db (Dump de la base de datos)
-- inc (funciones php)
-- template (partes o plantillas)
