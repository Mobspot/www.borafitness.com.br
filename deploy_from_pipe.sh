#!/bin/bash

cd ~
cd www.borafitness.com.br
git pull
sudo cp borafitness.conf /etc/apache2/sites-available/000-default.conf
sudo cp -R . /var/www/html/stage.borafitness.com.br/
sudo cp wp-config-sample.php /var/www/html/stage.borafitness.com.br/wp-config.php
sudo a2ensite /etc/apache2/sites-available/000-default.conf

ra


# code to send static files to oracle buckets here
#**************************************************