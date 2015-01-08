<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Add_settings_table extends CI_Migration {

  public function up() {
    $fields = array(
      'id' => array(
        'type' => 'INT',
        'unsigned' => TRUE,
        'null' => FALSE,
        'auto_increment' => TRUE
      ),
      'name' => array(
        'type' => 'TEXT'
      ),
      'value' => array(
        'type' => 'TEXT'
      ),
      'created' => array(
        'type' => 'DATETIME',
        'null' => 'FALSE'
      ),
      'updated' => array(
        'type' => 'TIMESTAMP',
        'null' => 'FALSE'
      )
    ); // end $fields

    $this->dbforge->add_field($fields);
    $this->dbforge->add_key('id', TRUE);
    $this->dbforge->create_table('settings', TRUE);
  }

  public function down() {
    $this->dbforge->drop_table('settings');
  }
}

/* End of file */
