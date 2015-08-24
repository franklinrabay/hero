<?php

use Hero\Core\App;
use Hero\Core\ModelLoader;

class Hero {

  public static $app;

  public function __construct() {

    // Constants
    if(!defined('ALTER')) define('ALTER', __DIR__ . "/..");
    if(!defined('ALTER_VENDOR')) define('ALTER_VENDOR', ALTER . "/..");

    if(!defined('APPLICATION_PATH')) define('APPLICATION_PATH', get_template_directory());

    $path = explode('wp-content', realpath(ALTER_VENDOR . "/meta-box/"));
    if(!defined('RWMB_URL')) define('RWMB_URL', get_site_url().'/wp-content'.$path[1].'/');
    if(!defined('RWMB_DIR')) define('RWMB_DIR', ALTER_VENDOR . "/meta-box/" );

    self::$app = new App();
    new ModelLoader(self::$app);

  }

  public function get(){
    return self::$app;
  }

}
