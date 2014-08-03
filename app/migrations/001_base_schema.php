<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Base_schema extends CI_Migration {

  public function up() {
    $fields = array(
      'id' => array(
        'type' => 'INT',
        'unsigned' => TRUE,
        'null' => FALSE,
        'auto_increment' => TRUE
      ),
      'title' => array(
        'type' => 'TEXT'
      ),
      'date' => array(
        'type' => 'DATE'
      ),
      'time' => array(
        'type' => 'TIME'
      ),
      'location' => array(
        'type' => 'TEXT'
      ),
      'description' => array(
        'type' => 'TEXT'
      ),
      'semester' => array(
        'type' => 'TEXT'
      ),
      'year' => array(
        'type' => 'YEAR'
      ),
      'meeting' => array(
        'type' => 'BOOL',
        'null' => 'FALSE'
      ),
      'service' => array(
        'type' => 'BOOL',
        'null' => 'FALSE'
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
    $this->dbforge->create_table('events', TRUE);
  }

  public function down() {
    $this->dbforge->drop_table('events');
  }
}

/* End of file 001_base_schema.php */
/* Location: ./app/migrations/001_base_schema.php */
