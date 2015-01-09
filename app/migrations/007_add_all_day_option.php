<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Add_all_day_option extends CI_Migration {

  public function up()
  {
    $field = array(
      'all_day' => array(
        'type' => 'BOOL'
      )
    );

    $this->dbforge->add_column('events', $field);
  }

  public function down()
  {
    $this->dbforge->drop_column('events', 'all_day');
  }
}

/* End of file */
