# DeeplApiTranslator

Deepl API extension for tanmuhittin/laravel-google-translate

This package **not** includes tanmuhittin/laravel-google-translate package as dependency.

## Installation

It supposed to the main package is installed and configured properly.

### Run composer install

> composer require composer require hlacos/deepl-api-translator

### Configure DeeplApiTranslator alias

Add following Alias to config/app.php

> 'DeeplApiTranslator' => Hlacos\DeeplApiTranslator\DeeplApiTranslator::class

### Configure Laravel google translate

Set up the following keys in config/laravel_google_translate.php file:
* custom_api_translator to DeeplApiTranslator
* custom_api_translator_key
