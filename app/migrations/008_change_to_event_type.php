<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Change_to_event_type extends CI_Migration {

  public function up() {
    $field = array(
      'type' => array(
        'type' => 'TEXT'
      )
    );

    $this->dbforge->drop_column('events', 'meeting');
    $this->dbforge->drop_column('events', 'service');
    $this->dbforge->add_column('events', $field);
  }

  public function down() {
    $fields = array(
      'meeting' => array(
        'type' => 'BOOL'
      ),
      'service' => array(
        'type' => 'BOOL'
      )
    );
    $this->dbforge->drop_column('events', 'type');
    $this->dbforge->add_column('events', $fields);
  }
}

/* End of file */
