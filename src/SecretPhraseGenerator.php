<?php

namespace AltAuth\SecretPhraseGenerator;

use Illuminate\Support\Arr;

class SecretPhraseGenerator
{

    protected $words = __DIR__ . '/words.txt';

    public function __invoke($quantity) : string
    {
        return collect(
            Arr::random(
                $this->getWords(),
                $quantity
            )
        )->implode(' ');
    }

    public function getWords() : array
    {
        return file(
            $this->words,
            FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES
        );
    }
}
