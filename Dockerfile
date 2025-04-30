FROM php:7.2-apache
COPY . /var/www/html/
RUN chown root:www-data /var/www/html
RUN chmod -R 755 /var/www/html
RUN chmod go-w /var/www/html
RUN chmod 700 /var/www/html/payload-attacker
RUN chmod 700 /var/www/html/docker-compose.yml
RUN chmod 700 /var/www/html/Dockerfile
RUN chmod 700 /var/www/html/vulnerable.class.php
RUN echo "FLAG{pwned_php_serialization}" > /flag.txt
EXPOSE 80