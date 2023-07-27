#!/bin/bash

sudo rm -R /var/www/html/stage.borafitness.com.br/*
sudo cp -R ~/www.borafitness.com.br/* /var/www/html/stage.borafitness.com.br/
sudo cp wp-config-sample.php /var/www/html/stage.borafitness.com.br/wp-config.php

sudo chown -R www-data:www-data /var/www/html
sudo chomod -R 775 /var/www/html

# code to send static files to oracle buckets here
#**************************************************

cd ~
sudo mkdir static_site
cd static_site
wget --mirror --convert-links --adjust-extension https://stage.borafitness.com.br
ls -la

cd ~
./google-cloud-sdk/bin/gcloud storage rm -R gs://www.borafitness.com.br/*
./google-cloud-sdk/bin/gcloud storage cp ~/static_site/* gs://www.borafitness.com.br