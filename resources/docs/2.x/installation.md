# Installation

## Requirements

- PHP 7.3 or higher
- Laravel 7.0 or higher

## Getting Started

Before installing a new package it's always a good idea to clear your config cache:

```bash
php artisan config:clear
```

Then install the package by running:

```bash
composer require cloudinary-labs/cloudinary-laravel
```

If you're using <strong>Laravel 8 and below</strong>:

``` bash
composer require cloudinary-labs/cloudinary-laravel:1.0.5
```

Once the package is installed, you need to register the service provider. Open up `config/app.php` and add the following to the `providers` key.

```php
'providers' => [
    ...
    CloudinaryLabs\CloudinaryLaravel\CloudinaryServiceProvider::class,
    ...
]
```

> Note: If you use **Laravel >= 5.5** , you can skip this step (adding the code above to the providers key) and go to [**`configuration`**](https://github.com/cloudinary-labs/cloudinary-laravel#configuration)


## Configuration

You can publish the configuration file using this command:

```bash
php artisan vendor:publish --provider="CloudinaryLabs\CloudinaryLaravel\CloudinaryServiceProvider" --tag="cloudinary-laravel-config"
```

A configuration file named `cloudinary.php` with some sensible defaults will be placed in your `config` directory:

```php
<?php
return [
     /*
    |--------------------------------------------------------------------------
    | Cloudinary Configuration
    |--------------------------------------------------------------------------
    |
    | An HTTP or HTTPS URL to notify your application (a webhook) when the process of uploads, deletes, and any API
    | that accepts notification_url has completed.
    |
    |
    */
    'notification_url' => env('CLOUDINARY_NOTIFICATION_URL'),


    /*
    |--------------------------------------------------------------------------
    | Cloudinary Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your Cloudinary settings. Cloudinary is a cloud hosted
    | media management service for all file uploads, storage, delivery and transformation needs.
    |
    |
    */
    'cloud_url' => env('CLOUDINARY_URL'),

    /**
    * Upload Preset From Cloudinary Dashboard
    *
    */
    'upload_preset' => env('CLOUDINARY_UPLOAD_PRESET')
];
```

### API Keys
Open your `.env` file and add your API Environment variable, upload_preset (this is optional, until you need to use the widget) like so:

```php
CLOUDINARY_URL=xxxxxxxxxxxxx
CLOUDINARY_UPLOAD_PRESET=xxxxxxxxxxxxx
CLOUDINARY_NOTIFICATION_URL=xxxxxxxx
```

***Note:** You need to get these credentials from your [Cloudinary Dashboard](https://cloudinary.com/console)*

*If you are using a hosting service like heroku, forge, digital ocean, etc, please ensure to add the above details to your configuration variables.*

### Cloudinary JS

Cloudinary relies on its own JavaScript library to initiate the Cloudinary Upload Widget. You can load the JavaScript library by placing the @cloudinaryJS directive right before your application layout's closing </head> tag:

```html
<head>
    ...

    @cloudinaryJS
</head>
```

***Note:** ONLY LOAD THIS IF YOU HAVE DECIDED TO USE THE UPLOAD WIDGET. IF YOU ARE USING THIS PACKAGE FOR A LARAVEL API BACKEND, YOU DON'T NEED TO DO THIS!*