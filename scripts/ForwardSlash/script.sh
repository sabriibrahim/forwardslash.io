#!/bin/bash

SALT=$(curl -L https://api.wordpress.org/secret-key/1.1/salt/)
STRING='put your unique phrase here'

printf '\n\n\n%s\n' "Source: https://api.wordpress.org/secret-key/1.1/salt/"
printf '\n%s\n' "Copy and paste code below to /cofig/application.php"
printf '%s\n\n' "If you want to edit your 'unique pharese', edit this file and put your unique phrase."
printf '%s\n\n\n' "$SALT"