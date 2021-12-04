#!/bin/sh

printf 'Subscribing:\n'

curl -X POST -H "Content-Type: application/json" -d '{ "url": "http://localhost:8000/api/students"}' http://localhost:8000/api/subscribe/engineering
curl -X POST -H "Content-Type: application/json" -d '{ "url": "http://localhost:8000/api/teachers"}' http://localhost:8000/api/subscribe/engineering

printf '\n\n'
printf 'Publishing:\n'
curl -X POST -H "Content-Type: application/json" -d '{"message": "presentation reminder"}' http://localhost:8000/api/publish/engineering

#printf '\n\n'
#printf 'Running Jobs:\n'
#php artisan queue:work
#
#printf '\n\n'
#printf 'Exiting:\n'
#exit
