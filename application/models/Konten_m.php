<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Konten_m extends CI_Model
{

    public function get_data($search = '')    
    {
        if($search != ''){
            $this->db->like('konten_judul',$search);
        }
        $dt = $this->db            
            ->from('konten')
            ->order_by('konten_id', 'ASC')
            ->get()
            ->result_array();
        // echo $this->db->last_query();die;
        return $dt;
    }

    public function get_data_view($id)
    {
        $dt = $this->db            
            ->from('konten')
            ->where('konten_id',$id)
            ->order_by('konten_id', 'ASC')
            ->get()
            ->result_array();
        // echo $this->db->last_query();die;
        return $dt;
    }

    public function get_gambar_delete($id)
    {
        $dt = $this->db
            ->select('gambar')
            ->from('konten')
            ->where('konten_id', $id)
            ->get()
            ->row()->gambar;
        return $dt;
    }

    public function save_add($data)
    {
        $result = $this->db->insert('konten', $data);
        return $result;
    }

    public function get_data_by_id($id)
    {

        $qy = "
            SELECT
                *
            from
                konten
            where 
                konten_id = '" . $id . "'
        ";
        $result = $this->db->query($qy)->row();
        return $result;
    }

    public function save_edit($data, $id)
    {
        $this->db->where('konten_id', $id);
        $result = $this->db->update('konten', $data);
        return $result;
    }

    public function deleted_data($id)
    {
        $this->db->where('konten_id', $id);
        return $this->db->delete('konten');
    }
}
