<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_surveys extends CI_Migration {

                                                     


        public function up()
        {
                $this->dbforge->add_field(array(
                        'survey_id' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'title' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                                'null' => TRUE,
                        ),
                        'user_id' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'null' => TRUE,
                                'comment' => 'user who created'
                        ),
                        'type' => array(
                                'type' => 'TEXT',
                                'constraint' => '20',
                                'null' => TRUE,
                                'comment' => 'puplic | private'
                        ),
                        'create_date' => array(
                                'type' => 'datetime',
                                 'null' => TRUE
                        ),
                        'start_date' => array(
                                'type' => 'datetime',
                                 'null' => TRUE
                        ),
                        'end_date' => array(
                                'type' => 'datetime',
                                 'null' => TRUE
                        ),
                        'is_approved' => array(
                                'type' => 'INT',
                                'constraint' => '2',
                                'null' => TRUE,
                                'comment' => '1 approved | 0 null unapproved'
                        ),
                        'update_date' => array(
                                'type' => 'datetime',
                                 'null' => TRUE
                        ),
                        'approved_admin' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'null' => TRUE,
                         ),

                ));
                $this->dbforge->add_key('survey_id', TRUE);
                $this->dbforge->create_table('surveys');

  
                
        }

        public function down()
        {
                $this->dbforge->drop_table('surveys');
         }
}