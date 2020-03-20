#Dockerfile: a text file with instructions to build image
#automation of docker image creation


FROM php:7.2-apache

RUN apt-get update && apt-get install -y
RUN docker-php-ext-install mysqli
