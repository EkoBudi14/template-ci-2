<?php

class M_data extends CI_Model
{
    function tampil_data()
    {
        return $this->db->get('user');
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function delete_data($where)
    {
        $this->db->where($where);
        $this->db->delete('user_menu');
    }
}
