printf 'Refreshing DB:\n'
php artisan migrate:fresh

printf '\n\n'
printf 'Creating Topics:\n'

curl -X POST -H "Content-Type: application/json" -d '{ "name": "Engineering"}' http://localhost:8000/api/topics
curl -X POST -H "Content-Type: application/json" -d '{ "name": "Economics"}' http://localhost:8000/api/topics
curl -X POST -H "Content-Type: application/json" -d '{ "name": "Mathematics"}' http://localhost:8000/api/topics
curl -X POST -H "Content-Type: application/json" -d '{ "name": "Computer Science"}' http://localhost:8000/api/topics

printf '\n\n'
printf 'Listing Topics:\n'

curl -X GET -H "Content-Type: application/json" http://localhost:8000/api/topics

printf '\n\n'
printf 'Creating Subscriptions:\n'
curl -X POST -H "Content-Type: application/json" -d '{ "url": "http://localhost:8000/api/students"}' http://localhost:8000/api/subscribe/engineering
curl -X POST -H "Content-Type: application/json" -d '{ "url": "http://localhost:8000/api/students"}' http://localhost:8000/api/subscribe/economics
curl -X POST -H "Content-Type: application/json" -d '{ "url": "http://localhost:8000/api/students"}' http://localhost:8000/api/subscribe/computer-science
curl -X POST -H "Content-Type: application/json" -d '{ "url": "http://localhost:8000/api/teachers"}' http://localhost:8000/api/subscribe/engineering
curl -X POST -H "Content-Type: application/json" -d '{ "url": "http://localhost:8000/api/catering"}' http://localhost:8000/api/subscribe/economics

printf '\n\n'
printf 'Listing Subscriptions:\n'

curl -X GET -H "Content-Type: application/json" http://localhost:8000/api/subscriptions

