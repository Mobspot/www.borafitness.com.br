#!/bin/bash

stagePath="/var/www/html/stage.borafitness.com.br"
gitPath="/home/ubuntu/www.borafitness.com.br"

sudo rm -R $stagePath/*
echo "stagePath empty..."

echo "coping gitPath to stagePath..."
sudo cp -R $gitPath/* $stagePath/

echo "coping wp-config..."
sudo cp $gitPath/wp-config-sample.php $stagePath/wp-config.php

echo "giving permission ok..."
sudo chown -R www-data:www-data /var/www/html
sudo chmod -R 775 /var/www/html

# code to send static files to google buckets here
#**************************************************
cd ~
echo "creating static_site..."
if [ -d "static_site" ]; then
  sudo rm -R static_site/*
else
  sudo mkdir static_site
fi

cd ~/static_site
sudo wget --mirror --convert-links --adjust-extension https://stage.borafitness.com.br
cd ~/static_site/stage.borafitness.com.br
ls -la

cd ~
echo "cleaning bucket..."
./google-cloud-sdk/bin/gcloud storage rm -R gs://www.borafitness.com.br/*

echo "coping files to bucket..."
./google-cloud-sdk/bin/gcloud storage cp ~/static_site/stage.borafitness.com.br/* gs://www.borafitness.com.br 

echo "fim do arquivo deploy.sh"
