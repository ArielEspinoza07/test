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

  public static function init_hooks($value='')
  {
    # code...
    self::$initiated = true;
    add_action('wp_footer',array('Api','getUsers'));
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
    echo '<div class="row">
      <div class="col-md-6 col-md-offset-3">
        <table style="background-color:white" class="table table-bordered table hover">
          <thead>
            <tr>
              <th>id</th>
              <th>name</th>
              <th>username</th>
              <th>email</th>
            </tr>
          </thead>
          <tbody>';
          foreach ($json as $item) {
            # code...
            echo '<tr><td>'.$item['id'].'</td>';
            echo '<td>'.$item['name'].'</td>';
            echo '<td>'.$item['username'].'</td>';
            echo '<td>'.$item['email'].'</td></tr>';
          }
          echo '</tbody>
          </table>
      </div>
    </div>';


  }

}


?>
