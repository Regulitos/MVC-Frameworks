<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_client extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field([
                        'id' => [
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ],
                        
                ]
                );
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('table_name');
        }

        public function down()
        {
                $this->dbforge->drop_table('table_name');
        }
}