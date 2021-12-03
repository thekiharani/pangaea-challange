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

