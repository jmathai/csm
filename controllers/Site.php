<?php
class Site
{
  public static function home()
  {
    getTemplate()->display('template.php', array('body' => 'home.php'));
  }
}
