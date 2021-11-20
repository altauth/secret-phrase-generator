# Secret Phrase Generator for Laravel

It generates secret pass phrase for Laravel Auth System.

## Require

    "require": {
            "php": "^7.3|^8.0",
            "laravel/framework": "^8.65"
        }
## Install

    composer require altauth/secret-phrase-generator


## Use

    <?php

    use AltAuth\SecretPhraseGenerator\SecretPhraseGenerator;

    $phrase = (new SecretPhraseGenerator)(20);

    // string: 'airdrop burros cables chokers curious dopiest dungs equinox forgo forgone garote grownup hosiery jeans renown sashay scones sultry tester uncover'
