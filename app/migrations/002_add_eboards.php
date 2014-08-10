<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Add_eboards extends CI_Migration {

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
      'position' => array(
        'type' => 'TEXT'
      ),
      'major' => array(
        'type' => 'TEXT'
      ),
      'grad_year' => array(
        'type' => 'YEAR'
      ),
      'bio' => array(
        'type' => 'TEXT'
      ),
      'semester' => array(
        'type' => 'TEXT'
      ),
      'year' => array(
        'type' => 'YEAR'
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
    $this->dbforge->create_table('eboards', TRUE);
  }

  public function down() {
    $this->dbforge->drop_table('eboards');
  }
}

/* End of file */
