FROM appsvcorg/nginx-fpm:php7.2.11

WORKDIR "/home/site/wwwroot"       

COPY env.php show_env.php /home/site/wwwroot/

COPY react/build /home/site/wwwroot/

# nginx
COPY nginx.conf /etc/nginx/nginx.conf
COPY default.conf /etc/nginx/conf.d/default.conf
# php
COPY php.ini /usr/local/etc/php/php.ini
COPY opcache-recommended.ini /usr/local/etc/php/conf.d/opcache-recommended.ini
COPY www.conf /usr/local/etc/php/conf.d/www.conf
COPY zz-docker.conf /usr/local/etc/php-fpm.d/zz-docker.conf

COPY entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/entrypoint.sh

EXPOSE 2222 80
ENTRYPOINT ["entrypoint.sh"]