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
    $content = '';
    $json = Api::getUsers();
  	$table =  '<div class="table-responsive">
    <table style="background-color:white" class="table table-condensed table-bordered table-hover  ">
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
                $content .= '<tr><td>'.$item['id'].'</td>' .
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
