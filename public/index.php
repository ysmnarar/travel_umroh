<?php

require __DIR__.'/../vendor/autoload.php';

$app = require_once __DIR__.'/../bootstrap/app.php';

$app->bind('path.public', function($app) {
    return __DIR__;
});

$app->run();