<?php
require('vendor/autoload.php');
$fw=Alit::instance();
$fw->config('app/configs/app.cfg');
$fw->run();