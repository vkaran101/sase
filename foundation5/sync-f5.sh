#!/bin/bash
# Simple script to sync files necessary for Foundation 5

## make sure we are in correct directory
DIR=`pwd`
if ! [[ "$DIR" == *foundation5* ]]; then
  echo "Please execute sync script from within foundation5 directory!"
  echo ""
  exit
fi

## sync necessary stylesheets and javascripts
cp ./css/app.css ../public/css/foundation5.css
cp ./js/app.js ../public/js/foundation5.js
cp ./bower_components/modernizr/modernizr.js ../public/js/modernizr.js
cp ./bower_components/jquery/dist/jquery.min.js ../public/js/jquery.min.js
cp ./bower_components/foundation/js/foundation.min.js ../public/js/foundation.min.js

echo "Foundation5 stylesheets and javascripts synced to public directory."
echo ""
ls ../public/*

