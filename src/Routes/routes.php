<?php

namespace AltAuth\SecretPhraseGenerator\Routes;

use Illuminate\Support\Facades\Route;
use AltAuth\SecretPhraseGenerator\SecretPhraseGenerator;

/***************
 * Just for demo
***************/
Route::get('/api/v1/secret', function (
    SecretPhraseGenerator $generator
) {
    return $generator(20);
});
