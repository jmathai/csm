<?php
date_default_timezone_set('America/New_York');

// framework
$epiPath = dirname(dirname(__FILE__)).'/epi';
include "{$epiPath}/Epi.php";
Epi::setPath('base', $epiPath);
Epi::setPath('config', dirname(dirname(__FILE__)).'/configs');
Epi::setPath('view', dirname(dirname(__FILE__)).'/views');
Epi::setSetting('exceptions', true);
Epi::init('config','route','template','logger');

// configs
getConfig()->load('prod.ini');
if(getenv('CONF'))
  getConfig()->load(getenv('CONF'));

include getConfig()->get('paths')->libraries . '/functions.php';
