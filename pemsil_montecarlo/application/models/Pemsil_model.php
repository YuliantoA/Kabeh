<?php

class Pemsil_model extends CI_Model
{
    public function getpemsil($id = null)
    {
        if ($id === null){
            //return $this->db->get('pemsil_tabel')->result_array();
            $this->db->order_by('minggu','DESC');
            // $this->db->from('pemsil_tabel');
            
            $temp[0]=$this->db->get_where('pemsil_tabel')->result_array();;
            $temp[1]= $this->db->get_where('pemsil_tabel')->num_rows();
            return $temp;
        }else
        {
            
        }
    }

    public function deletepemsil($id)
    {
        $this->db->delete('pemsil_tabel',['id' => $id]);
        return $this->db->affected_rows();
    }

    public function createpemsil($data)
    {
        $this->db->insert('pemsil_tabel', $data);
        return $this->db->affected_rows();
    }

    public function countpemsil($id)
    {
        $count = $this->db->count_all_results('pemsil_tabel');
        return $this->db->affected_rows();
    }
    public function updatepemsil($data, $id)
    {
        $this->db->update('pemsil_tabel', $data, ['id'=> $id]);
        return $this->db->affected_rows();
    }
    
}