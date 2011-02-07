<?php
try
{
  include '../configs/init.php';

  // controllers
  include getConfig()->get('paths')->controllers . '/Site.php';

  // routes
  getRoute()->load('routes.ini');
  getRoute()->run(); 
}
catch(Exception $e)
{
  getLogger()->crit('Uncaught exception in '.__FILE__.':'.__LINE__, $e);
  getRoute()->run('/error/general');
}
