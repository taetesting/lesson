# DOCKER IMAGE INSTALLATION
## APACHE - PHP - MEMCACHED
1. sudo docker build -t xuanvo/local:apache
2. sudo docker run -d -p 80:80 --name web -v /var/www/[your_folder]:/var/www/html xuanvo/local:apache

## MYSQL
1. Pull image from hub 
``sudo docker pull mysql``
2. sudo docker run -p 3306:3306 --name db -e MYSQL_ROOT_PASSWORD=root -d mysql:latest
3. Can you test mysql with command 
``mysql -uroot -p -h 127.0.0.1 -P 3900``
