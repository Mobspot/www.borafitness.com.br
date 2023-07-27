#!/bin/bash

cd ~
cd www.borafitness.com.br
git pull
sudo cp -R . /var/www/html/stage.borafitness.com.br/
sudo cp wp-config-sample.php /var/www/html/stage.borafitness.com.br/wp-config.php

# code to send static files to oracle buckets here
#**************************************************

cd ~
./google-cloud-sdk/bin/gcloud storage rm -R gs://www.borafitness.com.br/*
./google-cloud-sdk/bin/gcloud storage cp ~/www.borafitness.com.br/static_site/* gs://www.borafitness.com.br