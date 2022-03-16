<?php

namespace Hlacos\DeeplApiTranslator;

use BabyMarkt\DeepL\DeepL;
use Tanmuhittin\LaravelGoogleTranslate\Contracts\ApiTranslatorContract;

class DeeplApiTranslator implements ApiTranslatorContract
{
    public $handle;

    public function __construct($api_key)
    {
        $this->handle = new DeepL($api_key);
    }

    public function translate(string $text, string $locale, string $base_locale = null): string
    {
        try {
            $translation = $this->handle->translate($text, $base_locale, $locale);
        } catch (\Exception $e) {
            return false;
        }

        return $translation[0]['text'];
    }
}

