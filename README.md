<p align="center"><a href="https://pirago.vn" target="_blank"><img src="https://pirago.vn/images/logo.png" width="400"></a></p>


## *About This Repository*

```
 Just the basic base of a laravel project.
 Packages used: laravel-ui, admin-lte and laravel-modules integrated with multiple authentication.
```
   
### Packages
- **[Admin LTE 3.1](https://github.com/ColorlibHQ/AdminLTE)**
- **[Laravel Modules](https://github.com/nWidart/laravel-modules)**
- **[Laravel UI](https://github.com/laravel/ui)**
- Bonus: **[Multiple Authentication](https://pusher.com/tutorials/multiple-authentication-guards-laravel/)**

### Requirements

- PHP 8.x
- Node.js 10 or higher

## Setting

- Clone this repository
- Anti-virus software (like (**Avast**) can remove the file "server.php" from the project directory. Check whether the file is available. Create a new one if it's not available. **[*Here*](https://github.com/laravel/laravel/blob/master/server.php)**
- ``` cd laravel_base```, default branch: master
- Create environment file (make a copy of env.example)
- Install a php library or a package : ``` composer install```
- Generate APP_KEY: ``` php artisan key:generate```
- Config local database
- Run migration: ``` php artisan migrate```
- Seed your database : ``` php artisan db:seed```

## Login to Admin
- URL: ```"domain/admin/login"```
