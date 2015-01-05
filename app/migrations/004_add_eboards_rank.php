<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Add_eboards_rank extends CI_Migration {

  public function up() {
    $fields = array(
      'rank' => array(
        'type' => 'INT'
      )
    );
    $this->dbforge->drop_column('eboards','bio');
    $this->dbforge->add_column('eboards',$fields);
  }

  public function down() {
    $fields = array(
      'bio' => array(
        'type' => 'TEXT'
      )
    );
    $this->dbforge->drop_column('eboards','rank');
    $this->dbforge->add_column('eboards',$fields);
  }
}

/* End of file */
