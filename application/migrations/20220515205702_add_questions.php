<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_questions extends CI_Migration {

 

        public function up()
        {
                $this->dbforge->add_field(array(
                        'question_id' => array(
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
                        'text' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                                'null' => TRUE,
                        ),
                        'options' => array(
                                'type' => 'TEXT',
                                 'null' => TRUE
                        ),
                ));
                $this->dbforge->add_key('question_id', TRUE);
                $this->dbforge->create_table('questions');

  
                
        }

        public function down()
        {
                $this->dbforge->drop_table('questions');
         }
}