<?php

namespace Hlacos\DeeplApiTranslator;

use DeepL\Translator;

abstract class DeeplApiTranslator
{
    private Translator $handle;

    public function __construct($apiKey)
    {
        $this->handle = new \DeepL\Translator($apiKey);
    }

    public function translate(string $text, string $locale, string $baseLocale = null): string
    {
        $translation = $this->handle->translateText($text, $baseLocale, $locale);

        return $translation->text;
    }
}

