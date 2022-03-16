# DeeplApiTranslator

Deepl API extension for tanmuhittin/laravel-google-translate

This package includes tanmuhittin/laravel-google-translate package as dependency.

## Installation

### Run composer install

> composer require tanmuhittin/laravel-google-translate

### Publish vendor

> php artisan vendor:publish --provider="Tanmuhittin\LaravelGoogleTranslate\LaravelGoogleTranslateServiceProvider"

### Configure DeeplApiTranslator alias

Add following Alias to config/app.php

> 'DeeplApiTranslator' => Hlacos\DeeplApiTranslator\DeeplApiTranslator::class

### Configure Laravel google translate

Set up the following keys in config/laravel_google_translate.php file:
* custom_api_translator to DeeplApiTranslator
* custom_api_translator_key

## Additional informations

For additional informations about the original package please follow the original package instructions:
> https://github.com/tanmuhittin/laravel-google-translate
