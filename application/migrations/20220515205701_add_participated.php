<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_participated extends CI_Migration {



        public function up()
        {
                $this->dbforge->add_field(array(
                        'participate_id' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'survey_id' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'null' => TRUE,
                        ),
                        'user_id' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'null' => TRUE,
                        ),
                        'create_date' => array(
                                'type' => 'datetime',
                                 'null' => TRUE
                        ),
                ));
                $this->dbforge->add_key('participate_id', TRUE);
                $this->dbforge->create_table('participated');

  
                
        }

        public function down()
        {
                $this->dbforge->drop_table('participated');
         }
}