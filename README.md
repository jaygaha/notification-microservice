# [Dockerized](https://www.docker.com/) email microservice template using [Lumen](https://lumen.laravel.com/)

This is a microservice dockerized template for sending bulk emails using Lumen 8.x. [Laravel Queue](https://laravel.com/docs/8.x/queues) is used to schedule for sending emails.

Email templates are fully dynamic content, it supports full HTML content.

## Email data

4 key elements are:

* Entity: Entity will help us to know what the notification is about. For eg, a notification can be about a project or a user etc.
* Entity objects: Entity object are the different types of notifications. For eg, User is a entity and it supported 3 kinds of objects like new user welcome, invitation user, invitation accepted.
* Actor: The actor is the user who is responsible for triggering a notification. If the value is null then it is from company's no-reply email.
* Notifier: Notifier is the user to whom the notification has to be sent.

### Database ER

![alt text](public/images/db-er.png?raw=true)

### Testing Email Configuration

I am using [mailtrap](https://mailtrap.io/), it is a email sandbox service. Official tutorial can be found [here](https://mailtrap.io/blog/send-email-in-laravel/) to integrate with Larave/Lumen.

Used technologies

* [Docker](https://www.docker.com/)
* [Lumen 8.x](https://lumen.laravel.com/)
* [MySQL](https://www.mysql.com/)

## Installation

Use the package manager [git](https://git-scm.com/downloads) to install the repo.

```bash
git clone https://github.com/jaygaha/notification-microservice.git
cd notification-microservice
docker compose up -d --build
```

### Database migration and seeding

```bash
docker compose exec mail-web sh
/var/www/html# php artisan migrate:fresh --seed
```

If you don't want to use faker data then please omit ``` --seed ```

## TODO

* API Route (CRUD)

## Contributing

All code submissions will only be evaluated and accepted as pull-requests. If you have any questions or find any bugs please feel free to open an issue.

## License

Feel free to use.
