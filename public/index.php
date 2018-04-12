<?php

require_once dirname(__DIR__ ) . '/config/init.php';
//for debug
require_once LIBS . '/functions.php';

new \ishop\App();

debug(\ishop\App::$app->getProperties());

