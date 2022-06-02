<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_users extends CI_Migration {

                                                     


        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                'null' => TRUE,
                        ),
                        'surname' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                'null' => TRUE,
                        ),
                        'casper_key' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '1000',
                                'null' => TRUE,
                        ),
                        'user_name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                'null' => TRUE,
                        ),
                        'password' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                                'null' => TRUE,
                        ),
                        'email' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '150',
                                'null' => TRUE,
                        ),
                        'education' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20',
                                'null' => TRUE,
                        ),
                        'country' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                                'null' => TRUE,
                        ),
                        'gender' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '10',
                                'null' => TRUE,
                        ),
                        'birth_year' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '4',
                                'null' => TRUE,
                        ),
                        'avatar' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '150',
                                'null' => TRUE,
                        ),
                        'authority' => array(
                                'type' => 'TEXT',
                                'constraint' => '20',
                                'null' => TRUE,
                                'comment' => 'admin 2 | user 1'
                        ),
 
                        'is_active' => array(
                                'type' => 'INT',
                                'constraint' => '2',
                                'null' => TRUE,
                                'comment' => 'active 1 | inactive 0'
                        ),
                        'create_date' => array(
                                'type' => 'datetime',
                                 'null' => TRUE
                        ),
                        'rank' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                                'null' => TRUE 
                        ) 

                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('users');

                $data = array(
                        'user_name'=>'admin',
                        'password'=>'1f82ea75c5cc526729e2d581aeb3aeccfef4407e',
                        'email' => 'admin@email.com'
                );

                $this->db->insert('users',$data);

  
                
        }

        public function down()
        {
                $this->dbforge->drop_table('users');
        }
}
