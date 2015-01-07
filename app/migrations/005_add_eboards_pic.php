<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Add_eboards_pic extends CI_Migration {

  public function up()
  {
    $field = array(
      'pic' => array(
        'type' => 'TEXT'
      )
    );
    $this->dbforge->add_column('eboards', $field);
  }

  public function down()
  {
    $this->dbforge->drop_column('eboards', 'pic');
  }
}

/* End of file */
