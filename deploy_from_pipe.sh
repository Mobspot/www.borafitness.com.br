#!/bin/bash

stagePath="/var/www/html/borafitness.com.br"
gitPath="/home/ubuntu/www.borafitness.com.br"

sudo rm -R $stagePath/*
sudo cp -R $gitPath/* $stagePath/
sudo cp $gitPath/wp-config-sample.php $stagePath/wp-config.php
sudo chown -R www-data:www-data /var/www/html
sudo chmod -R 775 /var/www/html

# code to send static files to google buckets here
#**************************************************
# cd ~
# if [ -d "static_site" ]; then
#   sudo rm -R static_site/*
# else
#   sudo mkdir static_site
# fi

# cd ~/static_site
# sudo wget --mirror --convert-links --adjust-extension https://stage.borafitness.com.br

# cd ~
# ./google-cloud-sdk/bin/gcloud storage rm -R gs://www.borafitness.com.br/*
# ./google-cloud-sdk/bin/gcloud storage cp -R ~/static_site/stage.borafitness.com.br/* gs://www.borafitness.com.br 