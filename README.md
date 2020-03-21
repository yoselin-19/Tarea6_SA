# Tarea6_SA

## Autor: Yoselin Annelice Lemus López

## Archivos utilizados
Se hizo uso de los siguientes archivos para la implementacion de la tarea 6.
- Dockerfile
- docker-compose.yml
- Html/index.php
- BD/data.sql

---
## Archivo Dockerfile
El archivo Dockerfile sirve para generar la imagen que se utiliza como servidor_web, en esta imagen lo que se hace es instalar mysqli

```
FROM php:7.2-apache

RUN apt-get update && apt-get install -y
RUN docker-php-ext-install mysqli
```
## Archivo docker-compose.yml
Aquí es donde se crean los dos servidores:
- servidor_web
- servidor_bd

```
version: "3.7"

services:
    servidor_web:
        build:
            context: .
            dockerfile: Dockerfile
        container_name: servidor_web
        volumes:
            - type: bind
              source: ./Html
              target: /var/www/html        
        ports:
            - 80:80
        links:
            - servidor_bd
              
    servidor_bd:
        container_name: servidor_bd
        image: mysql:5.7
        command: --default-authentication-plugin=mysql_native_password
        environment:
            - MYSQL_ROOT_PASSWORD=123
            - MYSQL_DATABASE=Tarea
            - MYSQL_USER=devuser
            - MYSQL_PASSWORD=devpass
        ports:
            - 3306:3306
        volumes:
            - ./BD:/docker-entrypoint-initdb.d/
        restart: always
```
---

## Como Correr el docker compose
Ubicarse en la carpeta raiz, donde se encuentra el archivo docker-compose.yml.

Abrir una terminal en esta ubicacion y escribir el siguiente comando:

```
docker-compose up -d
```
Nota: -d para ejecutar todo en segundo plano.

## Como bajar los contenedores que levanto docker compose
Para bajar los contenedores que fueron creados y levantados con el comando anterior, solo seguir las mismas intrucciones que para correrlo, con la excepsion del comando, ahora el comando que tiene que escribir es el siguiente:

```
docker-compose down
```

## Video Demostracion
[![Ver video en youtube](https://i9.ytimg.com/vi/s-_iFES5mO0/mq3.jpg?sqp=CNDs1fMF&rs=AOn4CLA3urNoUMfGqwkW1b7a_WHzPP4aww)](https://youtu.be/s-_iFES5mO0)
