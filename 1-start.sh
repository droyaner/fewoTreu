#!/bin/bash
docker run -v $(pwd)/site:/var/www/html -p 80:80 fewo_treu
