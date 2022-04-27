# TB Laravel Prototype

repository used to test some things on Laravel framework for bachelor's degree work

## Helps

https://larainfo.com/blogs/laravel-9-rest-api-crud-tutorial-example
https://dev.to/shanisingh03/how-to-make-api-in-laravel-9-310g
https://www.tutsmake.com/laravel-9-rest-api-crud-example-tutorial/

form validation:
https://dev.to/secmohammed/laravel-form-request-tips-tricks-2p12
https://laravel.com/docs/9.x/validation

authorization:
https://laravel.com/docs/9.x/authorization

## Use
It use Laravel Sail, so go in the repo with the command "cd" and then type:
````
./vendor/bin/sail up
````

You can also create an alias like that:
````
alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'
````

### Default port
default developement server in on port 80

### Migration
````
./vendor/bin/sail artisan migrate
````

## Tests
````
./vendor/bin/phpunit
````
ou
````
./vendor/bin/sail artisan test
````

### Test coverage
````
./vendor/bin/sail artisan test --coverage
````

