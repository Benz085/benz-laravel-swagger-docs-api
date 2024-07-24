<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Set Up Project (Benz laravel-swagger-docs-api)

    $ git clone {url}
    $ check composer on Notebook, Macbook, Pc and Other (No composer : install https://getcomposer.org/download/)
    $ cd project/ [git clone]
    $ composer i

# RUN Command

    $ php artisan serv or php artisan serve --port=8080


# Path Route Docs

    {{BASE_URL}}/api/documentation


# RUN Docker

    $ ./vendor/bin/sail up -d  
    $ ./vendor/bin/sail up -d --build

# RUN Migrate Database

    $ ./vendor/bin/sail shell
    $ php artisan optimize:clear
    $ php artisan migrate


## Dev : Use OpenApi or Swagger integration to Laravel

    $ composer require darkaonline/l5-swagger

    $ php artisan vendor:publish --provider "L5Swagger\L5SwaggerServiceProvider"

    # SET .env : L5_SWAGGER_CONST_HOST=http://project.test/api/v1
    # Dev > code > run build code [https://spec.openapis.org/oas/latest.html#openapi-specification]
    $ php artisan l5-swagger:generate  [Update docs code]


## Scope of work

- Route OpenAPI and How Docs
- CRUD > User 
