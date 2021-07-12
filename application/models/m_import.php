<?php

class m_import extends CI_Model{

               function select(){

                              

                              $query = $this->db->get('tbinput');
                              return $query;

               }

               function insert($data){
               				$this->db->empty_table('tbinput');
                            $this->db->insert_batch('tbinput', $data);
               }

}