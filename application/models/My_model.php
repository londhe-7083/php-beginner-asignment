<?php

  class My_model extends CI_model
    {
        function insert($tname,$data){
            $this->db->insert($tname,$data);
        }
    }