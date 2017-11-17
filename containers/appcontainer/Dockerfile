FROM ubuntu:14.04
RUN apt-get -y update && apt-get -y upgrade 
RUN apt-get install -y nginx
RUN apt-get install -y php5 libapache2-mod-php5 php5-mcrypt
RUN apt-get install -y git
RUN git clone https://github.com/naukri-engineering/NewMonk.git /applications/newmonk
WORKDIR /applications/newmonk/server
RUN php5enmod mcrypt
RUN ./composer.phar install
WORKDIR /usr/share/nginx/html
RUN mkdir newmonk
RUN ln -s /applications/newmonk/server/web /usr/share/nginx/html/newmonk/server
RUN ln -s /applications/newmonk/dashboard/web /usr/share/nginx/html/newmonk/dashboard
COPY elasticsearch.yml /applications/newmonk/server/config
COPY logging.yml /applications/newmonk/server/config
COPY nc_caches.yml /applications/newmonk/server/config
COPY nc_databases.yml /applications/newmonk/server/config
COPY error.yml /applications/newmonk/server/config
COPY configphp /applications/newmonk/server/config
COPY default /etc/nginx/sites-enabled/
COPY nginx.conf /etc/nginx/
RUN echo "daemon off;" >> /etc/nginx/nginx.conf
CMD /usr/sbin/nginx; 
