<?php

/**
 *
 */
class Api
{


  private static $initiated = false;

  public static function init()
  {
    # code...
    if (!self::$initiated) {
      # code...
      self::init_hooks();
    }
  }

  public static function init_hooks()
  {
    # code...
    self::$initiated = true;
    //add_action('wp_footer',array('Api','getUsers'));
  }

  public static function getUsers(){
    // $ch = curl_init();
    // curl_setopt($ch,CURLOPT_URL,'http://laravel.ag/api/user');
    // curl_setopt($ch,CURLOPT_HEADER,false);
    //
    // curl_exec($ch);
    //
    // curl_close($ch);

    $json = file_get_contents('http://laravel.ag/api/user') or die("failed");

    $json = json_decode($json,true);

    //var_dump($json);

    return $json;

  }

}
