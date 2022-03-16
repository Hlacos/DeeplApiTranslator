<?php

namespace Hlacos\DeeplApiTranslator;

use BabyMarkt\DeepL\DeepL;
use BabyMarkt\DeepL\DeepLException;

abstract class DeeplApiTranslator
{
    private DeepL $handle;

    public function __construct($apiKey, $apiVersion, $apiHost)
    {
        $this->handle = new DeepL($apiKey, $apiVersion, $apiHost);
    }

    /**
     * @throws DeepLException
     */
    public function translate(string $text, string $locale, string $baseLocale = null): string
    {
        $translation = $this->handle->translate($text, $baseLocale, $locale);

        return $translation[0]['text'];
    }
}

