FROM willia4/nginx_php
MAINTAINER james@jameswilliams.me

WORKDIR /var/www
RUN rm -rf ./*

COPY nginx.conf /etc/nginx/nginx.conf

COPY ["Current Website", "/var/www"]