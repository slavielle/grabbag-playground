<?php

$basePath = realpath(dirname(__FILE__));

require_once $basePath . '/../../vendor/autoload.php';
require_once 'data.php';

use Grabbag\Grabbag;

$result = Grabbag::grab($input_data, [
    'name:companies/#0/staff/#0/list/#0/first_name',
    'age:companies/#0/staff/#0/list/#0/age',
]);

var_export($result);
