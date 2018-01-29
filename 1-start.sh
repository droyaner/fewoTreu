#!/bin/bash
#SITE=template
SITE=www
docker run -v $(pwd)/$SITE:/var/www/html -p 80:80 fewo_treu
