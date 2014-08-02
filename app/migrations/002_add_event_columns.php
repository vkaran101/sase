<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Add_event_columns extends CI_Migration {

  public function up() {
    $fields = array(
      'meeting' => array(
        'type' => 'BOOL',
        'null' => 'FALSE'
      ),
      'service' => array(
        'type' => 'BOOL',
        'null' => 'FALSE'
      )
    );

    $this->dbforge->add_column('events', $fields);
  }

  public function down() {
    $this->dbforge->drop_column('events', 'meeting');
    $this->dbforge->drop_column('events', 'service');
  }
}
