# PangaEA Tech Challange

## Getting Started
- Install dependencies: `composer install`
- Get the env file: `cp .env.example .env`
- Generate App Key: `php artisan key:gen`
- Configure the Database credentials in the `.env` file to match your settings
- Spin the local server: `php arisan serve`
- Check the `simulate.sh` file in the root director which contains the test _cURL_ scripts

## Notes
- For simplicity, I have created two endpoints which mimics the **subscribing (external) servers**. These endpoints are:
  - `http://localhost:8000/api/students`
  - `http://localhost:8000/api/teachers`
- When a topic is published, it is pushed to Queue in the `ProcessNotification Job`. The queue driver in the local server is `sync` but a better performant driver like `redis` will be used in production
- Since the publisher server pushes the requests to the queue, they are not immediately visible as response (this is typical external API call). The **subscribing (external) servers** results are logged via custom `notifications driver` are available at: `storage/logs/notifications-{timestamp}.log`

## Further Queries
> I am available on request for code reviews and any query related to my approach
