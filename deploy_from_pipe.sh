#!/bin/bash

cd ~
cd www.borafitness.com.br
git pull
sudo cp borafitness.conf /etc/apache2/sites-available/000-default.conf
sudo cp wp-config-sample.php /var/www/html/wp-config.php

# code to send static files to oracle buckets here
#**************************************************