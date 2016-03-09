<?php
/**
 *
 */
class Shortcode
{

  // public function __construct()
  // {
  //   $this->init();
  // }
  //
  // public function init()
  // {
  //   # code...
  //   $this->register_shortcodes();
  // }
  //
  // public function register_shortcodes()
  // {
  //     add_shortcode('job_listing','test_wp_shortcode');
  // }

  public function test_wp_shortcode()
  {
    $json = Api::getUsers();
  	$table =  '<div class="col-md-12">
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
                $content = '<tr><td>'.$item['id'].'</td>' .
                 '<td>'.$item['name'].'</td>' .
                 '<td>'.$item['username'].'</td>' .
                 '<td>'.$item['email'].'</td></tr>';
              }

          $footer = '</tbody>
          </table>
      </div>';

      echo $table . $content . $footer;
  }

}
