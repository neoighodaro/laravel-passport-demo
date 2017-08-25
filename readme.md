# Laravel passport demo
This is a demo on how to use laravel passport in your application. You can read the entire tutorial [here](#).

[![Get help on Codementor](https://cdn.codementor.io/badges/get_help_github.svg)](https://www.codementor.io/neoighodaro?utm_source=github&utm_medium=button&utm_term=neoighodaro&utm_campaign=github)

### Installation
Clone this repository. Run the following commands:

```
$ cd todos
$ cp .env.example .env
$ php artisan key:generate
```

Create your database and enter the details in your `.env` file. Now run the following commands:

```
$ php artisan migrate --seed
$ php artisan passport:install
```

You should see two client ID and secret pairs. Copy the secret key of the second client and paste it in the `consumer/index.php` file.

One final thing, make sure both directories are accessible using http. Now, if they are make sure the `consumer/index.php` file has the correct URLs listed.

Visit the consumer URL and it should fetch the todo list for you.
