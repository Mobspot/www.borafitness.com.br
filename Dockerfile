FROM php:8.1-apache

RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip

WORKDIR /var/www/html
COPY . .
COPY tilevu.conf /etc/apache2/sites-available/000-default.conf
COPY .env.example /var/www/html/.env

# Install PHP extensions required by Laravel
RUN docker-php-ext-install pdo pdo_mysql zip

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php
RUN mv composer.phar /usr/local/bin/composer
RUN composer install

RUN chown -R www-data:www-data storage bootstrap
RUN chmod -R 777 storage bootstrap/cache

RUN a2enmod rewrite

CMD ["sh", "-c", "apache2ctl -D FOREGROUND"]

EXPOSE 80 443

# docker build -t tilevu .
# docker run --rm -it -p 80:80 tilevu bash
# docker ps && docker image ls

# 4  sudo apt-get install apache2 -y

# 17  sudo apachectl configtest
# 18  sudo firewall -cmd --permanent --zone=public --add-service=http
# 19  sudo firewall-cmd --permanent --zone=public --add-service=http
# 20  sudo firewall-cmd --reload

# 22  # sudo firewall-cmd --zone=public --list-services
# 23  # sudo netstat -tulnp | grep httpd

# 43  sudo firewall-cmd --permanent --zone=public --add-service=http
# 44  sudo firewall-cmd --reload

# 46  sudo apt install ufw
# 47  sudo ufw status
# 48  sudo ufw add 22
# 49  sudo ufw allow 22
# 50  sudo ufw allow 80
# 51  sudo ufw enable
# 52  sudo ufw status
# 53  sudo ufw allow apache2
# 54  sudo ufw allow apache
# 55  sudo ufw list
# 56  sudo ufw status

# 60  sudo apt install iputils
# 61  sudo apt install iputils-ping

# 75  rewrite mode on
# 76  sudo iptables -I INPUT 6 -m state --state NEW -p tcp --dport 80 -j ACCEPT
# 77  sudo netfilter-persistent save

# 85  sudo apt update && sudo apt upgrade -y
# 86  sudo apt install software-properties-common apt-transport-https -y
# 87  sudo add-apt-repository ppa:ondrej/php -y
# 88  sudo apt install php8.1 libapache2-mod-php8.1

# 91  php --version
# 92  sudo apt install php8.0-
# 93  sudo apt install certbot python3-certbot-apache
# 94  sudo certbot --apache

# 96  sudo iptables -I INPUT 6 -m state --state NEW -p tcp --dport 443 -j ACCEPT

# 99  sudo apt install git
# 102  git clone git@github.com:SidMiranda/gaapi.mobspot.com.br.git
# 103  sudo git clone git@github.com:SidMiranda/gaapi.mobspot.com.br.git
# 104  wget https://github.com/SidMiranda/www.mobspot.com.br.git

# 113  ssh-keygen -t ed25519 -C "sidney.miranda2013@gmail.com"
# 114  eval "$(ssh-agent -s)"
# 115  ssh-add ~/.ssh/id_ed25519
# 116  clip < ~/.ssh/id_ed25519.pub
# 117  cat ~/.ssh/id_ed25519.pub
# 118  sudo git clone git@github.com:SidMiranda/gaapi.mobspot.com.br.git
# 119  ssh -T git@github.com
# 120  git clone git@github.com:SidMiranda/gaapi.mobspot.com.br.git

# 161  sudo apt install composer
# 163  composer --v
# 164  composer --version
# 166  sudo composer install
# 168  sudo rm composer.lock
# 169  sudo composer install

# 243  sudo apt install mariadb-server
# 244  sudo systemctl start mariadb
# 245  sudo systemctl status mariadb
# 246  sudo mysql_secure_installation
# 247  sudo mysql

# 448  service ufw status
# 449  ufw list
# 450  ufw app list
# 451  sudo ufw app list
# 452  sudo ufw add 443
# 453  sudo ufw add TCP/443
# 454  ping www.google.com.br
# 455  php -l
# 456  php --version
# 457  sudo service php8.1 restart
# 460  cd init.d

# 469  sudo ufw disable
# 470  sudo systemctl restart apache2
# 471  sudo systemctl status apache2
# 472  tail -f /var/log/apache2/error.log
# 473  sudo iptables -L
# 474  sudo ufw status
# 475  sudo iptables -F
# 476  sudo iptables -P INPUT ACCEPT
# 477  sudo iptables-save > /etc/iptables/rules.v4
# 478  sudo systemctl stop iptables
# 479  sudo iptables -L

# 686  sudo apt-get install php-dom
# 687  sudo apt-get update
# 688  sudo apt-get install php-xml
# 689  sudo systemctl restart apache2
# 690  sudo apt-get install php-dom
# 691  sudo apt-get install Reading package lists... Done
# 692  sudo apt-get install php8.2-xml 8.2.4-1+ubuntu22.04.1+deb.sury.org+1
# 693  sudo apt-get install php8.2-xml