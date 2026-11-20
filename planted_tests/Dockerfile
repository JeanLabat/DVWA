# PLANTED BUG 4b: container runs as root, unpinned base image, no healthcheck.
FROM php:latest

USER root
COPY . /var/www/html
RUN apt-get update && apt-get install -y curl
EXPOSE 80
CMD ["php", "-S", "0.0.0.0:80", "-t", "/var/www/html"]
