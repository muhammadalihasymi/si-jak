<?php

class m_files extends CI_Model{

               function fetch_data(){

                              $this->db->order_by("idx", "DESC");

                              $query = $this->db->get("tbinput");

                              return $query->result();

               }

}