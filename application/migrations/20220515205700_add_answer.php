<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_answer extends CI_Migration {
 

        public function up()
        {
                $this->dbforge->add_field(array(
                        'answer_id' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'question_id' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'null' => TRUE
                        ),
                        'survey_id' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'null' => TRUE
                        ),
                        'participated_id' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'null' => TRUE
                        ),
                        'answer' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                                'null' => TRUE
                        ),
                        'user_id' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'null' => TRUE
                        ),
                        'create_date' => array(
                                'type' => 'datetime',
                                 'null' => TRUE
                        ),

                ));
                $this->dbforge->add_key('answer_id', TRUE);
                $this->dbforge->create_table('answer');

 

                
        }

        public function down()
        {
                $this->dbforge->drop_table('answer');
        }
}