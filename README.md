# DragonPay Api Integration - Laravel Package
Laravel specific composer package for DragonPay API integration.

## How it works

Almost all the required configuration is contained within the package (migrations, configuration, service providers and services registration). 
It will be discovered after running `composer update`.

The package will register an implementation of `ServiceProvider` which will register `DragonPayService` as well as all the migration and configuration files.

The `DragonPayService` has public method `getUserLifetimeId($email, $name, $prefix = '', $remarks = '')` that:
1. tries to find the `userLifetimeId` in the database
2. if db has no entry related to the `$email` it tries to generate the `userLifetimeId` using DragonPay API
3. returns the `userLifetimeId`

it can also throw some exceptions if the configuration is not correct or there were problems with communication with DragonPay API, or the returned value is empty.

## Additional requirements

This package requires `soap` PHP extension. 

## Installation

Add custom repository in the `composer.json` file:

```
"repositories": [{
    "type": "git",
    "url": "https://github.com/TendoPayPlugins/laravel-dragonpay-api.git"
}],
```

then add the `require` package:
```
"tendopay/laravel-dragonpay-api": "0.*"
```

## Database migration

The package contains laravel's migration files. After installation or with every update, you should run `php artisan migrate` to apply all the required migrations.


## Configuration

In laravel's `.env` file add following keys with proper values:
```
DRAGONPAY_WSDL=
DRAGONPAY_MERCHANT_ID=
DRAGONPAY_MERCHANT_PASSWORD=
```

## Change log

### v0.3.2
Working plugin (first entry in the change log, so no actual change ;) )
