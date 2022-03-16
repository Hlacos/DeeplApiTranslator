<?php

namespace Hlacos\DeeplApiTranslator;

use Tanmuhittin\LaravelGoogleTranslate\Contracts\ApiTranslatorContract;

class DeeplProApiTranslator extends DeeplApiTranslator implements ApiTranslatorContract
{
    private int $apiVersion = 2;
    private string $apiHost = 'https://api.deepl.com';

    public function __construct($apiKey)
    {
	    parent::__construct($apiKey, $this->apiVersion, $this->apiHost);
    }
}

